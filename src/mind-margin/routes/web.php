<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    Route::resource('books', BookController::class)->only(['index', 'show']);
    
    Route::get('/search', [SearchController::class, 'index'])->name('search.index');
    
    Route::get('/mypage', [MypageController::class, 'index'])->name('mypage.index');

    Route::resource('books.reviews', ReviewController::class)->only(['store']);

    Route::resource('reviews', ReviewController::class)->only(['update', 'destroy']);
    
    Route::resource('books.notes', NoteController::class)->only(['store']);

    Route::resource('notes', NoteController::class)->only(['show', 'update', 'destroy']);
});