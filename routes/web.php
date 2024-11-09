<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin')->name('admin.dashboard');

Route::middleware(['auth'])->group(function () {
    // Routes for logged-in users
    Route::get('/home', function () {
        return view('home');
    });
});

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
