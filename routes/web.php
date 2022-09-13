<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
use App\Models\Album;
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

Route::get('browse', [UserController::class, 'browse']);
Route::get('charts', [UserController::class, 'charts']);
Route::get('artist', [UserController::class, 'artist']);
Route::get('track/detail', [SellerController::class, 'detail']);
Route::get('profile',[SellerController::class, 'profile']);
Route::get('playlist', function(){
    return view('seller.playlist');
});
Route::get('create/song', [SellerController::class, 'allSongs']);
Route::get('edit/song/{id}',[SellerController::class, 'editSongs'] );
Route::post('update/song', [SellerController::class, 'updateSong'])->name('update.song');
Route::post('create/album', [SellerController::class, 'addAlbum'])->name('create.album');
Route::post('create/song', [SellerController::class, 'addSongs']) ->name('create.song');
Route::get('delete/song/{id}', [SellerController::class, 'deleteSong']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
