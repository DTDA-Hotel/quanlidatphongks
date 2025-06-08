<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, [ 'vi','en'])) {
        session(['locale' => $locale]);
    }
    return redirect(route("client.index"));
});
Route::prefix("/")->group(function(){
    Route::get('/', [CustomerController::class,"index"])->name("client.index");
});

Route::prefix("/administrator")->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("admin.index");
    Route::prefix("/category")->group(function () {
        Route::get("/",[CategoryController::class,"index"])->name("admin.category");
        Route::get("/create",[CategoryController::class,"create"])->name("admin.createcat");
        Route::get("/edit/{id}",[CategoryController::class,"edit"])->name("admin.editcat");
        Route::get("/delete/{id}",[CategoryController::class,"destroy"])->name("admin.delcat");
        Route::post("/add",[CategoryController::class,"store"])->name("admin.addcat");
        Route::post("/update/{id}",[CategoryController::class,"update"])->name("admin.updcat");
    });
    Route::prefix("/room")->group(function(){
        Route::get("/list",[RoomController::class,"index"])->name("admin.roomlist");
        Route::get("/add",[RoomController::class,"create"])->name("admin.addroom");
        Route::get("/edit/{id}",[RoomController::class,"edit"])->name("admin.editroom");
        Route::get("/del/{id}",[RoomController::class,"destroy"])->name("admin.delroom");
        Route::put("/update/{id}",[RoomController::class,"update"])->name("admin.updroom");
        Route::post("/store",[RoomController::class,"store"])->name("admin.storeroom");
    });
});
