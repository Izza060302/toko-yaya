<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
// return view('welcome');
// });
// Route::get('/home', function () {
    return "Hallo nama saya Izza Syafia Almalaki";
// });
Route::get('/', [LHomepageController::class, 'index']);

// Route::get('/beranda', [LatihanController::class, 'beranda']);