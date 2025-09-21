<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activities', function () {
    return view('activities');
})->middleware(['auth', 'verified'])->name('activities');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware(['auth'])->group(function () {
        Route::get('/workshops', [App\Http\Controllers\WorkshopController::class, 'index'])->name('workshops.index');
    });

Route::get('/workshops_activities', function () {
    return view('workshops_activities');
})->middleware(['auth', 'verified'])->name('workshops_activities');


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

Route::get('/politicas-privacidad', function () {
    return view('politicas-privacidad');
});

//RUTAS PARA MÉTODOS REST DE LAS ACTIVIDADES
Route::get('/activities_esc', [App\Http\Controllers\ActivityController::class, 'workshop']);
Route::get('/workshop', [App\Http\Controllers\WorkshopController::class, 'workshopp']);
Route::get('/workshop_activities', [App\Http\Controllers\WorkshopActivityController::class, 'workshop_activities']);
Route::resource('/activities', App\Http\Controllers\ActivityController::class);
Route::delete('/activities/{activity}/delete', [App\Http\Controllers\ActivityController::class, 'delete'])->name('activities.delete');

Route::resource('/comments', App\Http\Controllers\CommentController::class);
Route::delete('/comments/{comment}/delete', [App\Http\Controllers\CommentController::class, 'delete'])->name('comments.delete');
//RUTAS PARA MÉTODOS REST DE LOS TALLERES


Route::resource('/workshops', App\Http\Controllers\WorkshopController::class);
Route::delete('/workshops/{workshop}/delete', [App\Http\Controllers\WorkshopController::class, 'delete'])->name('workshops.delete');

Route::resource('/workshops_activities', App\Http\Controllers\WorkshopActivityController::class)
     ->parameters(['workshops_activities' => 'workshop_activity']);

Route::delete('/workshops_activities/{workshop_activity}/delete', [App\Http\Controllers\WorkshopActivityController::class, 'delete'])->name('workshops_activities.delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


