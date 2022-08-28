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
    return view('welcome');
});
Auth::routes();
Route::get('player',function(){
    return(view('player'));
});
Route::get('browse',function(){
    return(view('browse'));
});
Route::get('charts',function(){
    return(view('charts'));
});
Route::get('artist',function(){
    return(view('artist'));
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
