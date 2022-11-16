<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adatok;

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


Route::get('/tulajdon', function () {
    return view('tulajdon');
});

Route::get('/baleset', function () {
    return view('baleset');
});

Route::get('/adatok',[adatok::class,"bekuldes"]);
Route::post('/adatok',[adatok::class,"rogzites"]);