<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\materialController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/lecturedata', function () {
    return view('lecturedata');
})->middleware(['auth', 'verified'])->name('lecturedata');

Route::get('/studentdata', function () {
    return view('studentdata');
})->middleware(['auth', 'verified'])->name('studentdata');

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

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/editphone', [ProfileController::class, 'updatePhone'])->name('phone.update');
    Route::patch('/profile/editPass', [ProfileController::class, 'updatePassword'])->name('update.password');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
