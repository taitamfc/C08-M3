<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');//resources/views/welcome.blade.php
});

Route::get('link-vip/{age}',[App\Http\Controllers\UserController::class,'link_vip'])->middleware('checkage');

Route::resource('users',App\Http\Controllers\UserController::class);