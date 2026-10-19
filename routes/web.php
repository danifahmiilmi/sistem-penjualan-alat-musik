<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');

Route::get('/produk', [InstrumentController::class, 'index'])->name('instruments.index');

Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/instruments/{id}', [InstrumentController::class, 'show'])
    ->name('instruments.show');
