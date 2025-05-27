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


Route::get('/workshop', function () {
    return view('workshop');
});


Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/30dtv0296r_tjs', function () {
    return view('30dtv0296r_tjs');
});
