<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/promo', [HomeController::class, 'promo'])->name('promo');
Route::get('/diskon', [HomeController::class, 'diskon'])->name('diskon');
Route::get('/tentang', [HomeController::class, 'tentangGabi'])->name('tentanggabi');
Route::get('/campaigntka', [HomeController::class, 'campaignTKA'])->name('campaigntka');
Route::get('/flashsale', [HomeController::class, 'flashsale'])->name('flashsale');
