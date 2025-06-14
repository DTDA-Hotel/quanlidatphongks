<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
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
        try {
        if($request->hasFile("pimage")){
            $img = $request->file("pimage");
            $filename=time().'_'.$img->getClientOriginalName();
            $img->storeAs("/upload",$filename);
        }
        
            Room::create(["name"=>$name,"category_id"=>$cate,"pimage"=>$filename,"description"=>$desc,"amenities"=>$amenities,"position"=>$pos]);
            return redirect(route("admin.roomlist"));
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
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
        if($request->hasFile("pimage")){
            $img = $request->file("pimage");
            $filename = time()."_".$img->getClientOriginalName();
            $img->storeAs("/upload",$filename);
            Room::where("id",$id)->update(["name"=>$name,"category_id"=>$cat,"pimage"=>$filename,"description"=>$desc,"amenities"=>$ame,"position"=>$pos]);
            return redirect(route("admin.roomlist"));
        }elseif($request->file("pimage")==null||$request->file("pimage")==[]){
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
