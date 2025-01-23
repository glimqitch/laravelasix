<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ComptadorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/comptador', [ComptadorController::class, 'index']);
Route::post('/incrementar', [ComptadorController::class, 'incrementar']);
Route::post('/decrementar', [ComptadorController::class, 'decrementar']);
Route::post('/reset', [ComptadorController::class, 'reset']);

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{book}/delete', [BookController::class, 'delete'])->name('books.delete');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
Route::post('/games', [GameController::class, 'store'])->name('games.store');
Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');
Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::put('/games/{game}', [GameController::class, 'update'])->name('games.update');
Route::get('/games/{game}/delete', [GameController::class, 'delete'])->name('games.delete');
Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('games.destroy');


Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () { Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard'); });
