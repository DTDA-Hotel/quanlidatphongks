<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
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
    Route::get("/category",[CategoryController::class,"index"])->name("admin.category");
    Route::get("/category/create",[CategoryController::class,"create"])->name("admin.createcat");
    Route::post("/category/add",[CategoryController::class,"store"])->name("admin.addcat");
});
