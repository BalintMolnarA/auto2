<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adatok;
use App\Http\Controllers\Tulajdon;
use App\Http\Controllers\Baleset;
use App\Http\Controllers\Fooldal;




Route::get('/',[fooldal::class,"kiiras"]);

Route::get('/adatok',[adatok::class,"bekuldes"]);
Route::post('/adatok',[adatok::class,"rogzites"]);

Route::get('/tulajdon',[tulajdon::class,"bekuldes"]);
Route::post('/tulajdon',[tulajdon::class,"rogzites"]);

Route::get('/baleset',[baleset::class,"bekuldes"]);
Route::post('/baleset',[baleset::class,"rogzites"]);