<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\khoanh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imglist = khoanh::get();
         $sortedImg = khoanh::all()->groupBy("roomid");
        return view("admin.storage.image.index",compact("imglist","sortedImg"));
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
    public function show(string $id)
    {
        //
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
    public function destroy($id)
    {
        $img = khoanh::findOrFail($id);
        $img->delete();
        return back();
    }
    public function trash(){
        $trashed = khoanh::onlyTrashed()->get();
        return view("admin.storage.image.trash",compact("trashed"));
    }
    public function fdel($id){
        $img = khoanh::onlyTrashed()->findOrFail($id);
        // dd($img);
        Storage::delete("/public/upload/.$img->imgname");
        $img->forceDelete();
        return back();
    }
    public function restore($id){
        $img = khoanh::onlyTrashed()->findOrFail($id);
        $img->restore();
        return back();
    }
}
