<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardController;
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
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/livros')->group(function() {
    Route::get('/', [BookController::class, 'index'])->name('books-index');
    Route::get('/cadastro', [BookController::class, 'create'])->name('books-create');
    Route::post('/', [BookController::class, 'store'])->name('books-store');
    Route::get('/{id}/editar', [BookController::class, 'edit'])->name('books-edit');
    Route::put('/{id}', [BookController::class, 'update'])->name('books-update');
    Route::delete('/{id}', [BookController::class, 'destroy'])->name('books-destroy');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
