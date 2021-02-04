<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('books', 'App\Http\Controllers\BookController@getAllBooks');
Route::get('books/{id}', 'App\Http\Controllers\BookController@getBook');
Route::post('books/create', 'App\Http\Controllers\BookController@createBook');
Route::put('books/update/{id}', 'App\Http\Controllers\BookController@updateBook');
Route::delete('books/delete/{id}','App\Http\Controllers\BookController@deleteBook');
