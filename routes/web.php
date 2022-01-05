<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;

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
//shows the clients
Route::get('/favourites', 'App\Http\Controllers\UserController@index');
Route::get('/favourites/create', 'App\Http\Controllers\UserController@create');
Route::post('/favourites', 'App\Http\Controllers\UserController@store');
Route::get('/favourites/{id}', 'App\Http\Controllers\UserController@show');
Route::put('/favourites/{id}', 'App\Http\Controllers\UserController@remove_movie');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
