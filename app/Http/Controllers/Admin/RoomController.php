<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\khoanh;
use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomlist = Room::get();
        // $cat = Category::get();
        foreach($roomlist as $k=>$v){
           $cats= Category::find($v['category_id']);
           $roomlist[$k]["category_name"] = $cats["name"];
            // dd($t);
        }
        // dd($roomlist);
        return view("admin.Room.index",compact("roomlist"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catelist = Category::get();
        return view("admin.Room.add",compact("catelist"));
    }
    public function totest(){
        return view("test");
    }
    public function uptest(Request $request){
        if($request->hasFile("pimage")){
            $img = $request->file("pimage");
            $filename=time().'_'.$img->getClientOriginalName();
            $img->storeAs("/upload",$filename);
        }else{
            echo "error";
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $cate = $request->input("category");
        $amenities = $request->input("amenities");
        $pos = $request->input("position");
        $filename = "" ;
        $desc = $request->input("desc","");
        // try {
        if($request->hasFile("pimage")){
            $img = $request->file("pimage");
            $filename=time().'_'.$img->getClientOriginalName();
            $img->storeAs("/upload",$filename);
            
            
        }
        
            Room::create(["name"=>$name,"category_id"=>$cate,"pimage"=>$filename,"description"=>$desc,"amenities"=>$amenities,"position"=>$pos]);
            $idnewroom = Room::where("name",$name)->get();
            // dd($idnewroom);
            khoanh::create(["imgname"=>$filename,"roomid"=>$idnewroom[0]->id]);
            return redirect(route("admin.roomlist"));
        // } catch (\Throwable $th) {
        //     throw $th;
        // }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $roominf = Room::findOrFail($id);
           $cats= Category::find($roominf['category_id']);
           $roominf["category_name"] = $cats["name"];
            // dd($t);
        
        $imglist = khoanh::where("roomid",$roominf->id)->get();
        return view("admin.Room.info",compact("roominf","imglist","id"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $roomdata = Room::findOrFail($id);
        $cat = Category::get();
        return view("admin.Room.edit",compact("roomdata","cat"));
    }
    public function toStorePic($id){
        return view("admin.Room.store",compact("id"));
    }

    public function StorePic($id,Request $request){
        if($request->hasFile("images")){
            foreach($request->file("images") as $file){
                $filename = time().'_'.uniqid().'_'.$file->getClientOriginalName();
                $file->storeAs("/upload",$filename);
                khoanh::create([
                    'imgname'=>$filename,
                    'roomid'=>$id
                ]);
            }
        }else{
            return back()->withErrors(["err"=>"lỗi tải file lên"]);
        }
        // khoanh::create([]);
        return redirect(route("admin.showroom",["id"=>$id]));
    }
    /**
     * Update the specified resource in storage.
     */

     
    public function update(Request $request,$id)
    {
        // $ro = Room::findOrFail($id);
        $filename ="";
        $name= $request->input("name");
        $cat= $request->input("category");
        $desc= $request->input("desc");
        $ame = $request->input("amenities");
        $pos = $request->input("position");
        $oimg = $request->input("old_img");
        // dd($request->has("pimage"));
        if($request->hasFile("pimage")){
            // dd(1);
            $img = $request->file("pimage");
            $filename = time()."_".$img->getClientOriginalName();
            $img->storeAs("/upload",$filename);
            Room::where("id",$id)->update(["name"=>$name,"category_id"=>$cat,"pimage"=>$filename,"description"=>$desc,"amenities"=>$ame,"position"=>$pos]);
            return redirect(route("admin.roomlist"));
        }elseif($request->file("pimage")==null||$request->file("pimage")==[]){
        //    dd(2);
            Room::where("id",$id)->update(["name"=>$name,"category_id"=>$cat,"pimage"=>$oimg,"description"=>$desc,"amenities"=>$ame,"position"=>$pos]);
            return redirect(route("admin.roomlist"));
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Room::destroy($id);
        return redirect(route("admin.roomlist"));
    }
}
