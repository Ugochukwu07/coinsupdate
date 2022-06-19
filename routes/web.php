<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ReviewController;

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/get-book', 'getBook')->name('getbook');
});

Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');

Route::controller(NewsletterController::class)->prefix('newsletter')->name('newsletter.')->group(function(){
    Route::post('/add', 'store')->name('add.store');
});