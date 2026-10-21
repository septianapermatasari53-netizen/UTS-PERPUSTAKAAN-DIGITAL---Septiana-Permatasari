<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Halaman Utama (Home)
Route::get('/', function () {
    return view('home');
});

// Halaman Daftar Buku
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Halaman Detail Buku
Route::get('/books/{id}', [BookController::class, 'show'])->name('book.show');