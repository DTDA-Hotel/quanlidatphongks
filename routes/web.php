<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CustomerController::class,"index"])->name("customer.index");
