<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\CommentController;


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


Route::get('/activities_esc', function () {
    return view('activities_esc');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/workshop_activities', function () {
    return view('workshop_activities');
});


//RUTAS PARA MÉTODOS REST DE LAS ACTIVIDADES
Route::get('/activities_esc', [App\Http\Controllers\ActivityController::class, 'workshop']);
Route::get('/workshop', [App\Http\Controllers\WorkshopController::class, 'workshopp']);
Route::resource('/activities', App\Http\Controllers\ActivityController::class);
Route::delete('/activities/{activity}/delete', [App\Http\Controllers\ActivityController::class, 'delete'])->name('activities.delete');

Route::resource('/comments', App\Http\Controllers\CommentController::class);
Route::delete('/comments/{comment}/delete', [App\Http\Controllers\CommentController::class, 'delete'])->name('comments.delete');
//RUTAS PARA MÉTODOS REST DE LOS TALLERES


Route::resource('/workshops', App\Http\Controllers\WorkshopController::class);
Route::delete('/workshops/{workshop}/delete', [App\Http\Controllers\WorkshopController::class, 'delete'])->name('workshops.delete');

Route::resource('/workshops_activities', App\Http\Controllers\WorkshopActivityController::class);
Route::delete('/workshops_activities/{workshop_activity}/delete', [App\Http\Controllers\WorkshopActivityController::class, 'delete'])->name('workshops_activities.delete');
