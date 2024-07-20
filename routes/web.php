<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\biens;

Route::get('/', [biens::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/location', function () {
    return view('biens.location');
})->name('locations');

Route::get('/biens/{id}', function () {
    return view('biens.detail');
})->name('detail');

Route::get('/createbien', [biens::class, 'create'])->middleware(['auth', 'verified'])->name('biens');
Route::post('/biens', [biens::class, 'store'])->middleware(['auth', 'verified'])->name('bien-submit');
Route::get('/dashboard', function () {
    return view('admin.profile');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
