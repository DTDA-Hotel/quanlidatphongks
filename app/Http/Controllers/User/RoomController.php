<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\khoanh;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::limit(4)->get();
        return view("client.room.list",compact("rooms"));
    }
    public function CateRoomList(int $id){
        $catname = Category::findOrFail($id);
        $listbycat = Room::where("category_id",$id)->get();
                // dd($listbycat);
        foreach($listbycat as $k=>$v){
            $categoryname = Category::findOrFail($id)->name;
            $listbycat[$k]->categoryname = $categoryname;
            
        }
        session::put("curcat", $catname->name);

        return view("client.room.list",compact("listbycat","catname"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $room = Room::findOrFail($id);
        //
        $imglist = khoanh::where("roomid", $id)->get();
        return view("client.room.detail",compact("room","imglist"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
