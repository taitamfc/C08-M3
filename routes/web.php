<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
	$locale = session('cr_lang');

	// var_dump($locale);
	// die();

	App::setLocale($locale);

	
    return view('welcome');//resources/views/welcome.blade.php
});

Route::get('/changeLang/{lang}', function ($locale) {
	/*
	vi
	en
	*/
	session(['cr_lang' => $locale]);

	return redirect('/');
});

Route::get('link-vip/{age}',[UserController::class,'link_vip'])->middleware('checkage');

Route::resource('users',UserController::class);

Route::get('test-session',[UserController::class,'testSession']);


//demo

Route::get('admin',[UserController::class,'admin'])->name('users.admin')->middleware('auth');

//=> login
//Route::get('login',[UserController::class,'login'])->name('login');
Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::post('postLogin',[UserController::class,'postLogin'])->name('users.postLogin');;

//Route::get('register',[UserController::class,'register'])->name('users.register');;
Route::post('postRegister',[UserController::class,'postRegister'])->name('users.postRegister');;