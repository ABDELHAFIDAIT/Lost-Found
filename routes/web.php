<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('guest.index');
});

Route::get('/user', function () {
    return view('user.index');
})->middleware(['auth', 'verified']);

Route::get('/user/profile', function () {
    return view('user.profile');
})->middleware(['auth', 'verified']);

Route::get('/user/settings', function () {
    return view('user.settings');
})->middleware(['auth', 'verified']);

Route::get('guest/annonces', [AnnonceController::class, 'index']);
Route::get('guest/annonce/{id}', [AnnonceController::class, 'get']);

Route::get('user/annonces', [AnnonceController::class, 'index'])->middleware(['auth','verified']);
Route::get('user/annonce/{id}', [AnnonceController::class, 'get'])->middleware(['auth','verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
