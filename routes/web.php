<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalificacionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calificaciones', [CalificacionController::class, 'showForm'])->name('calificaciones.form');
Route::post('/calificaciones', [CalificacionController::class, 'submitForm'])->name('calificaciones.submit');

