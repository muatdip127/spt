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

Route::get('/get_art','Controller@get_art');
Route::post('/get_arts','Controller@get_arts');
Route::get('/ get_prop','Controller@get_prop');
Route::get('/migrate','Controller@migrate');