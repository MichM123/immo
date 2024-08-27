<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiensController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticatedSessionController;



Route::get('/profil', [ProfileController::class, 'index']);

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact',[PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/publier', [PageController::class, 'publish'])->middleware(['auth'])->name('publier');
Route::get('/location', [PageController::class, 'location'])->name('louer');
Route::get('/vente', [PageController::class, 'vente'])->name('vente');
Route::get('/allbiens', [PageController::class, 'all'])->name('mes_biens');

Route::get('/profil', [AdminController::class, 'profil'])->name('admin.profil');

Route::get('/createbien', [BiensController::class, 'create'])->middleware(['auth'])->name('biens');
Route::post('/biens', [BiensController::class, 'store'])->middleware(['auth'])->name('biens-submit');
Route::get('/biens/{id}/edit', [BiensController::class, 'edit'])->name('biens.edit');
Route::put('/biens/{id}', [BiensController::class, 'update'])->name('biens.update');
Route::delete('/biens/{id}', [BiensController::class, 'delete'])->name('delete');
Route::get('/user/{id}/detail', [BiensController::class, 'show'])->name('detail');


Route::get('/dashboard', function () {
    return view('admin.adminbiens');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
