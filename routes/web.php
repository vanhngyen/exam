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

Route::get("/listbook","WebController@listbook");
Route::get("/searchbook/{title}","WebController@searchbook");
Route::get("/information","WebController@information");
Route::post("/saveinformation","WebController@saveInformation");
Route::get("/home","WebController@home");
