<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Room;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function about(){
        return view("client.about");
    }
    public function contact(){
        return view("client.contact");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::orderBy('rating')->take(4)->get();
        $checkactive = ["home","about","contact","news","other","rooms"];
        session::put(["active"=>$checkactive]);
        session::put(["locale"=>"vi"]);
        return view("client.index",compact('rooms'));
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
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
