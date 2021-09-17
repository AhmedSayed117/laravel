<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FirstController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\PhotoController;
use App\Http\Controllers\Front\IndexController;


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

Route::get('/',[IndexController::class ,"homepage"]);



//Route::group(['prefix' => 'users'],function(){
//    Route::get("/",[FirstController::class,"showstring"]);
//});


Route::resource('news',NewsController::class);
Route::resource('photo',PhotoController::class);

Route::get('get/{id}',[NewsController::class,"shownews"])->name('name');
