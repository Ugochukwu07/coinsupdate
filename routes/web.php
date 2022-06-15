<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReviewController;

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('index');
});

Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');