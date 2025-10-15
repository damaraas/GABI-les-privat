<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/promo', [HomeController::class, 'promo'])->name('promo');
Route::get('/diskon', [HomeController::class, 'diskon'])->name('diskon');
Route::get('/tentang', [HomeController::class, 'tentangGabi'])->name('tentanggabi');
Route::get('/campaigntka', [HomeController::class, 'campaignTKA'])->name('campaigntka');
Route::get('/flashsale', [HomeController::class, 'flashsale'])->name('flashsale');
Route::get('faq-bantuan', [HomeController::class, 'faq'])->name('faq');
Route::get('/artikel/{slug}', [HomeController::class, 'artikel1Detail'])->name('artikel1.detail');
Route::get('/artikel1', [HomeController::class, 'artikel1'])->name('artikel1');

Route::get('/blog', [BlogController::class, 'index'])->name('Index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('Show');