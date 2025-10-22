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
Route::get('/faq-bantuan', [HomeController::class, 'faq'])->name('faq');

Route::get('/blog', [BlogController::class, 'index']);
// Halaman tiap artikel manual
Route::get('/blog/cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan', function() {
    return Inertia::render('Blog/Artikel1');
});
Route::get('/blog/cara-mengatur-waktu-belajar-efektif-dengan-pomodoro-technique', function() {
    return Inertia::render('Blog/Artikel2');
});
Route::get('/blog/5-manfaat-belajar-bahasa-mandarin-untuk-masa-depan', function () {
    return Inertia::render('Blog/Artikel4');
});
Route::get('/blog/Cara-Jitu-Persiapan-UTBK-SNBT-agar-Meraih-Skor-Tinggi', function () {
    return Inertia::render('Blog/Artikel5');
});
Route::get('/blog/cara-cepat-jago-speaking-dan-grammar-dengan-les-privat-bahasa-inggris', function () {
    return Inertia::render('Blog/Artikel7');
});

// Route::get('/artikel1/{slug}', [HomeController::class, 'artikel1Detail'])->name('artikel1.detail');
// Route::get('/artikel1', [HomeController::class, 'artikel1'])->name('artikel1');
