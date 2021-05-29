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
    return view('0269wellcome');
});

Route::view('0269pil1','0269pil1');
Route::view('0269pil2','0269pil2');
Route::view('0269pil3','0269pil3');
Route::view('0269pil4','0269pil4');
