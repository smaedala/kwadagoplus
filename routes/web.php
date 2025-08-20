<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('enhanced_home');
});

Route::get('/contact', function () {
    return view('contact');
});

// Registration Routes
Route::middleware('guest')->group(function () {
    Route::get('/register/seeker', [RegisterController::class, 'showSeekerForm'])->name('register.seeker.form');
    Route::post('/register/seeker', [RegisterController::class, 'registerSeeker'])->name('register.seeker');
    Route::get('/register/provider', [RegisterController::class, 'showProviderForm'])->name('register.provider.form');
    Route::post('/register/provider', [RegisterController::class, 'registerProvider'])->name('register.provider');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
