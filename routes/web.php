<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiensController;
use App\Http\Controllers\PageController;



Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact',[PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/publier', [PageController::class, 'publish'])->name('publier');

Route::get('/createbien', [BiensController::class, 'create'])->middleware(['auth'])->name('biens');
Route::post('/biens', [BiensController::class, 'store'])->middleware(['auth'])->name('biens-submit');
Route::get('/dashboard', function () {
    return view('admin.profile');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
