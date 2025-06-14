<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, [ 'vi','en'])) {
        session(['locale' => $locale]);
    }
    return redirect(route("client.index"));
});
Route::middleware( 'auth')->prefix("/")->group(function(){
    Route::get('/', [CustomerController::class,"index"])->name("client.index");
});

Route::middleware( 'admin')->prefix("/administrator")->group(function(){
     Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.showLogin');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');

    Route::get("/category",[CategoryController::class,"index"])->name("admin.category");
    Route::get("/category/create",[CategoryController::class,"create"])->name("admin.createcat");
    Route::post("/category/add",[CategoryController::class,"store"])->name("admin.addcat");


    Route::get("/account",[UserController::class,"index"])->name("admin.account");
    Route::get("/account/{id}/edit",[UserController::class,"edit"])->name("admin.edituser");
    Route::post("/account/{id}/update",[UserController::class,"update"])->name("admin.updateuser");
    Route::get("/account/{id}/delete",[UserController::class,"destroy"])->name("admin.deleteuser");

});



    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'postRegister'])->name('postRegister');

    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('postLogin');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
