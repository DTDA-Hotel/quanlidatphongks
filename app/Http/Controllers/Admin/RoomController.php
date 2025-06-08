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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $cate = $request->input("category");
        $desc = $request->input("desc","");
        try {
            Room::create(["name"=>$name,"category_id"=>$cate,"description"=>$desc]);
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
        $name= $request->input("name");
        $cat= $request->input("category");
        $desc= $request->input("desc");
        Room::where("id",$id)->update(["name"=>$name,"category_id"=>$cat,"description"=>$desc]);
        return redirect(route("admin.roomlist"));
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
