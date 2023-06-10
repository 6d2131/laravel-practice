<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return response()->json(['message' => 'API endpoint for users']);
});


Route::get('/timeline', function () {
    return response()->json(
        [
            [
                'name' => '山本',
                'id' => 'ymamoto',
                'content' => 'こんにちは'
            ],
            [
                'name' => '山本',
                'id' => 'ymamoto',
                'content' => 'こんにちは'
            ],
            [
                'name' => '山本',
                'id' => 'ymamoto',
                'content' => 'こんにちは'
            ]
        ]
    );
});
