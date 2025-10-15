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
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '32 Februari 2028',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
            [
                'id' => 2,
                'thumbnail' => 'img/artikel1/a1.webp',
                'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '32 Februari 2028',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
            [
                'id' => 3,
                'thumbnail' => 'img/artikel1/a1.webp',
                'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '32 Februari 2028',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
            [
                'id' => 4,
                'thumbnail' => 'img/artikel1/a1.webp',
                'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '32 Februari 2028',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
            [
                'id' => 5,
                'thumbnail' => 'img/artikel1/a1.webp',
                'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '32 Februari 2028',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
            [
                'id' => 6,
                'thumbnail' => 'img/artikel1/a1.webp',
                'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '32 Februari 2028',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
        ];

        return Inertia::render('Blog/Index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $posts = [
        'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan' => [
            'id' => 1,
            'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
            'tanggal' => '32 Februari 2028',
            'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
        ],
        'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan' => [
            'id' => 2,
            'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
            'tanggal' => '32 Februari 2028',
            'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
        ],
        'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan' => [
            'id' => 3,
            'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
            'tanggal' => '32 Februari 2028',
            'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
        ],
        'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan' => [
            'id' => 4,
            'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
            'tanggal' => '32 Februari 2028',
            'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
        ],
        'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan' => [
            'id' => 5,
            'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
            'tanggal' => '32 Februari 2028',
            'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
        ],
        'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan' => [
            'id' => 6,
            'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
            'tanggal' => '32 Februari 2028',
            'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
        ],
        ];

        abort_unless(isset($posts[$slug]), 404);

        return Inertia::render('Blog/Show', ['post' => $posts[$slug]]);
    }
}