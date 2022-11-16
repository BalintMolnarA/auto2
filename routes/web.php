<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adatok;
use App\Http\Controllers\Tulajdon;
use App\Http\Controllers\Baleset;

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



Route::get('/adatok',[adatok::class,"bekuldes"]);
Route::post('/adatok',[adatok::class,"rogzites"]);

Route::get('/tulajdon',[tulajdon::class,"bekuldes"]);
Route::post('/tulajdon',[tulajdon::class,"rogzites"]);

Route::get('/baleset',[baleset::class,"bekuldes"]);
Route::post('/baleset',[baleset::class,"rogzites"]);