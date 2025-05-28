<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;


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




//RUTAS PARA MÉTODOS REST DE LAS ACTIVIDADES
Route::resource('/activities', App\Http\Controllers\ActivityController::class);
Route::get('/activities/{activity}/delete', [App\Http\Controllers\ActivityController::class, 'delete'])->name('activities.delete');
