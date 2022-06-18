<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PresaleController;
use App\Http\Controllers\ReviewController;

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('index');
});

Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');

Route::controller(PresaleController::class)->prefix('pre-sale')->name('presale.')->group(function(){
    Route::post('/add', 'store')->name('add.store');
});