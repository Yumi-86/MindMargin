<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\HomeController;

Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/search', fn()=> view('search.index'))->name('search.index');
    
    Route::resource('books', BookController::class)->only(['index', 'show']);
    
    Route::resource('reviews', ReviewController::class);
    
    Route::resource('notes', NoteController::class);
    
    Route::get('/mypage', [MypageController::class, 'show'])->name('mypage.index');
});