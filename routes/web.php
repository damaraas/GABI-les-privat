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
Route::get('/blog/trik-cepat-kuasai-ujian-toefl-listening-reading-dan-writing', function () {
    return Inertia::render('Blog/Artikel3');
});
Route::get('/blog/5-manfaat-belajar-bahasa-mandarin-untuk-masa-depan', function () {
    return Inertia::render('Blog/Artikel4');
});
Route::get('/blog/Cara-Jitu-Persiapan-UTBK-SNBT-agar-Meraih-Skor-Tinggi', function () {
    return Inertia::render('Blog/Artikel5');
});
Route::get('/blog/5-Fun-Fact-Menarik-tentang-Metode-Montessori-Privat-yang-Bikin-Anak-Betah-Belajar
', function () {
    return Inertia::render('Blog/Artikel6');
});
Route::get('/blog/cara-cepat-jago-speaking-dan-grammar-dengan-les-privat-bahasa-inggris', function () {
    return Inertia::render('Blog/Artikel7');
});
Route::get('/blog/Les-Privat-Matematika-Menyenangkan-dengan-4-Tips-Efektif-untuk-Anak', function () {
    return Inertia::render('Blog/Artikel8');
});
Route::get('/blog/les-privat-tatap-muka-vs-online-mana-yang-lebih-cocok', function () {
    return Inertia::render('Blog/Artikel9');
});
Route::get('/blog/5-manfaat-les-privat-calistung-untuk-perkembangan-anak-usia-dini', function () {
    return Inertia::render('Blog/Artikel10');
});
Route::get('/blog/cara-membuat-jadwal-belajar-realistis-dan-konsisten', function () {
    return Inertia::render('Blog/Artikel11');
});
Route::get('/blog/Manfaat-Les-Privat-Dibanding-Belajar-Konvensional', function () {
    return Inertia::render('Blog/Artikel12');
});
Route::get('/blog/Strategi-Meningkatkan-Konsentrasi-dan-Motivasi-Belajar-di-Rumah', function () {
    return Inertia::render('Blog/Artikel13');
});
Route::get('/blog/Belajar-Lebih-Fokus-Meski-Sulit-Konsentrasi-dengan-Guru-Privat', function () {
    return Inertia::render('Blog/Artikel17');
});
