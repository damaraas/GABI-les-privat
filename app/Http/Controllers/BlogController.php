<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'thumbnail' => 'img/artikel1/a1.webp',
                'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
                'konten' => 'Hayoo, siapa di sini yang masih malas membaca? Merujuk dari quotes di atas, seharusnya bisa memotivasi 
                    kamu untuk lebih giat membaca. Faktanya, banyak orang sebenarnya punya niat membaca, tapi sulit bertahan lebih dari 
                    beberapa halaman. Apalagi di era sekarang, ketika notifikasi handphone terasa lebih menarik daripada baris-baris tulisan.',
                'tanggal' => '09 Oktober 2025',
                'formattanggal' => '2025-10-09',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
            [
                'id' => 2,
                'thumbnail' => 'img/artikel2/a1.webp',
                'judul' => 'Cara Mengatur Waktu Belajar Efektif dengan Pomodoro Technique',
                'konten' => 'Pernah ga sih kamu ngerasa udah belajar berjam-jam tapi tetap nggak paham-paham? 
                    Atau baru buka buku 10 menit, eh tangan malah gatal buka Snapgram? Belum lagi rasa bosan yang cepat 
                    datang kalau duduk terlalu lama. Tantangan-tantangan seperti ini sering bikin belajar jadi terasa berat dan nggak efisien.',
                'tanggal' => '20 Oktober 2025',
                'formattanggal' => '2025-10-20',
                'slug' => 'cara-mengatur-waktu-belajar-efektif-dengan-pomodoro-technique',
            ],
            [
                'id' => 3,
                'thumbnail' => 'img/artikel1/a1.webp',
                'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '32 Februari 2028',
                'formattanggal' => '2025-01-35',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
            [
                'id' => 4,
                'thumbnail' => 'img/artikel1/a1.webp',
                'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '32 Februari 2028',
                'formattanggal' => '2025-01-35',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
            [
                'id' => 5,
                'thumbnail' => 'img/artikel5/a1.webp',
                'judul' => 'Cara Jitu Persiapan UTBK SNBT agar Meraih Skor Tinggi',
                'konten' => 'UTBK bukan cuma soal hafalan, tapi strategi! Pelajari cara jitu mengatur waktu, memahami pola soal, dan meningkatkan performa agar peluang lolos SNBT makin besar.',
                'tanggal' => '32 Februari 2028',
                'formattanggal' => '2025-01-35',
                'slug' => 'Cara-Jitu-Persiapan-UTBK-SNBT-agar-Meraih-Skor-Tinggi',
            ],
            [
                'id' => 6,
                'thumbnail' => 'img/artikel1/a1.webp',
                'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '32 Februari 2028',
                'formattanggal' => '2025-01-35',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
        ];

        usort($posts, function($a, $b) {
            return strtotime($b['formattanggal']) - strtotime($a['formattanggal']);
        });


        return Inertia::render('Blog/Index', ['posts' => $posts]);
    }
}