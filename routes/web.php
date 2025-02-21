<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
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
})->middleware(['auth', 'verified'])->name('user');

// Route::get('/user/profile/', [AnnonceController::class,'annonces']);

Route::get('guest/annonces', [AnnonceController::class, 'index']);
Route::get('guest/annonce/{id}', [AnnonceController::class, 'get']);

Route::post('guest/search', [AnnonceController::class, 'search'])->name('guest.search');
Route::post('guest/search', [CommentController::class, 'store'])->name('guest.comment');

// Route::get('user/annonces', [AnnonceController::class, 'index'])->middleware(['auth','verified']);
// Route::get('user/annonce/', [AnnonceController::class, 'get'])->middleware(['auth','verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/user/annonce', [AnnonceController::class,'get'])->name('user.annonce');
    Route::get('/user/annonces', [AnnonceController::class,'index'])->name('user.annonces');
    Route::get('/user/profile', [AnnonceController::class,'annonces'])->name('user.profile');
    Route::post('/user/store', [AnnonceController::class,'store'])->name('user.store');
    Route::post('/user/search', [AnnonceController::class,'search'])->name('user.search');
    Route::post('/user/comment', [CommentController::class,'store'])->name('user.comment');
    Route::get('/user/create', [CategoryController::class,'index'])->name('user.create');
    Route::delete('/user/delete/{id}', [AnnonceController::class, 'destroy'])->name('user.destroy');
});

require __DIR__.'/auth.php';
