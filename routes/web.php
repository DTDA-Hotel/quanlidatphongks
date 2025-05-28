<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::prefix("/")->group(function(){
    Route::get('/', [CustomerController::class,"index"])->name("client.index");
});

Route::prefix("/administrator")->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("admin.index");
});