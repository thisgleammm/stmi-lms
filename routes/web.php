<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\materialController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\lectureController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/lecturedata', [lectureController::class, 'tampil'])->middleware(['auth', 'verified'])->name('lecturedata');
Route::post('/lecturedata', [lectureController::class, 'submit'])->middleware(['auth', 'verified'])->name('lecturedata');
Route::put('/lecturedata/{id}', [lectureController::class, 'update'])->middleware(['auth', 'verified'])->name('lecturedata.update');

Route::get('/studentdata', [mahasiswaController::class, 'tampil'])->middleware(['auth', 'verified'])->name('studentdata');
Route::post('/studentdata', [mahasiswaController::class, 'submit'])->middleware(['auth', 'verified'])->name('studentdata');
Route::put('/studentdata/{id}', [mahasiswaController::class, 'update'])->middleware(['auth', 'verified'])->name('studentdata.update');

Route::get('/calendar', function () {
    return view('calendar');
})->middleware(['auth', 'verified'])->name('calendar');

Route::get('/mytask', function () {
    return view('mytask');
})->middleware(['auth', 'verified'])->name('mytask');

Route::get('/attempt', function () {
    return view('attempt');
})->middleware(['auth', 'verified'])->name('attempt');


Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/mycourse', [coursesController::class, 'index'])->middleware(['auth', 'verified'])->name('mycourse');

Route::get('/coursefile/{course?}/{type?}', [coursesController::class, 'courses'])->middleware(['auth', 'verified'])->name('coursefile');
Route::get('/coursefile/{course?}/{type?}', [coursesController::class, 'tampil2'])->middleware(['auth', 'verified'])->name('coursefile');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/editphone', [ProfileController::class, 'updatePhone'])->name('phone.update');
    Route::patch('/profile/editPass', [ProfileController::class, 'updatePassword'])->name('update.password');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
