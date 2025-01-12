<?php
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\lectureController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Halaman lain dengan middleware auth dan verified
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/lecturedata', [lectureController::class, 'tampil'])->name('lecturedata');
    Route::post('/lecturedata', [lectureController::class, 'submit'])->name('lecturedata');
    Route::put('/lecturedata/{id}', [lectureController::class, 'update'])->name('lecturedata.update');

    Route::get('/studentdata', [mahasiswaController::class, 'tampil'])->name('studentdata');
    Route::post('/studentdata', [mahasiswaController::class, 'submit'])->name('studentdata');
    Route::put('/studentdata/{id}', [mahasiswaController::class, 'update'])->name('studentdata.update');


    

    Route::get('/calendar', function () {
        return view('/mahasiswa/calendar');
    })->name('calendar');

    Route::get('/mycourse', function () {
        return view('/mahasiswa/mycourse');
    })->name('mycourse');

    Route::get('/mytask', function () {
        return view('/mahasiswa/mytask');
    })->name('mytask');

    Route::get('/attempt', function () {
        return view('/mahasiswa/attempt');
    })->name('attempt');

    Route::get('/coursefile', function () {
        return view('/mahasiswa/coursefile');
    })->name('coursefile');
});

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
