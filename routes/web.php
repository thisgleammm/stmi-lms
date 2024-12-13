<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/lecturedata', function () {
    return view('lecturedata');
})->middleware(['auth', 'verified'])->name('lecturedata');

Route::get('/studentdata', function () {
    return view('studentdata');
})->middleware(['auth', 'verified'])->name('studentdata');

Route::get('/calendar', function () {
    return view('calendar');
})->middleware(['auth', 'verified'])->name('calendar');

Route::get('/mycourse', function () {
    return view('mycourse');
})->middleware(['auth', 'verified'])->name('mycourse');

Route::get('/mytask', function () {
    return view('mytask');
})->middleware(['auth', 'verified'])->name('mytask');

Route::get('/attempt', function () {
    return view('attempt');
})->middleware(['auth', 'verified'])->name('attempt');

Route::get('/coursefile', function () {
    return view('coursefile');
})->middleware(['auth', 'verified'])->name('coursefile');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
