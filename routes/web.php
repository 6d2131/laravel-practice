<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/timeline', function () {
    return view('timeline');
});

Route::get('post', 'App\Http\Controllers\PostController@index');
Route::get('post/create', 'App\Http\Controllers\PostController@create');
Route::put('post', 'App\Http\Controllers\PostController@store');
Route::delete('post/{id}', 'App\Http\Controllers\PostController@destroy');

     