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
                'judul' => 'Artikel 3',
                'konten' => 'Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan. Gunakan teknik membaca cepat, skimming, scanning, hingga Pomodoro.',
                'tanggal' => '22 Oktober 2025',
                'formattanggal' => '2025-10-22',
                'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
            ],
            [
                'id' => 4,
                'thumbnail' => 'img/artikel4/a1.webp',
                'judul' => '5 Manfaat Belajar Bahasa Mandarin untuk Masa Depan',
                'konten' => 'Di era globalisasi seperti sekarang, penguasaan bahasa asing menjadi salah satu keterampilan penting yang bisa membuka banyak peluang. Dari sekian banyak bahasa asing, Bahasa Mandarin menempati posisi yang sangat strategis. Mengapa? Karena Mandarin bukan hanya bahasa sehari-hari bagi lebih dari satu miliar orang di dunia, tetapi juga kunci untuk memahami budaya, bisnis, dan pendidikan di Tiongkok yang kini berkembang pesat.',
                'tanggal' => '22 Oktober 2025',
                'formattanggal' => '2025-10-22',
                'slug' => '5-manfaat-belajar-bahasa-mandarin-untuk-masa-depan',
            ],
            [
                'id' => 5,
                'thumbnail' => 'img/artikel5/a1.webp',
                'judul' => 'Cara Jitu Persiapan UTBK SNBT agar Meraih Skor Tinggi',
                'konten' => 'UTBK SNBT (Seleksi Nasional Berdasarkan Tes) adalah salah satu momen paling menegangkan bagi para siswa SMA yang bercita-cita masuk perguruan tinggi negeri favorit. Setiap tahunnya, ratusan ribu peserta berjuang memperebutkan kursi yang jumlahnya terbatas. Tantangannya bukan hanya soal persaingan nih, tapi juga bagaimana mempersiapkan diri secara efektif agar bisa meraih skor tinggi.',
                'tanggal' => '22 Oktober 2025',
                'formattanggal' => '2025-10-22',
                'slug' => 'Cara-Jitu-Persiapan-UTBK-SNBT-agar-Meraih-Skor-Tinggi',
            ],
            [
                'id' => 6,
                'thumbnail' => 'img/artikel6/a1.webp',
                'judul' => '5 Fun Fact Menarik tentang Metode Montessori Privat yang Bikin Anak Betah Belajar',
                'konten' => 'Metode Montessori adalah pendekatan belajar yang dikembangkan oleh Dr. Maria Montessori pada awal abad ke-20. Filosofinya menekankan kebebasan, eksplorasi, dan pembelajaran yang dipersonalisasi sesuai kebutuhan anak.',
                'tanggal' => '22 Oktober 2025',
                'formattanggal' => '2025-10-22',
                'slug' => '5-Fun-Fact-Menarik-tentang-Metode-Montessori-Privat-yang-Bikin-Anak-Betah-Belajar',
            ],
            [
                'id' => 7,
                'thumbnail' => 'img/artikel7/a2.webp',
                'judul' => 'Cara Cepat Jago Speaking dan Grammar dengan Les Privat Bahasa Inggris',
                'konten' => 'Bahasa Inggris sekarang udah kayak “skill wajib” buat anak muda. Mau nonton film tanpa subtitle, main game online, sampai bikin tugas sekolah atau persiapan kuliah, semua butuh bahasa Inggris. Bahkan banyak beasiswa atau lomba akademik yang syarat utamanya adalah kemampuan bahasa Inggris. Jadi, kalau kamu pengen punya lebih banyak peluang di masa depan, speaking dan grammar harus mulai dilatih dari sekarang.',
                'tanggal' => '22 Oktober 2025',
                'formattanggal' => '2025-10-22',
                'slug' => 'cara-cepat-jago-speaking-dan-grammar-dengan-les-privat-bahasa-inggris',
            ],
        ];

        usort($posts, function($a, $b) {
            return strtotime($b['formattanggal']) - strtotime($a['formattanggal']);
        });


        return Inertia::render('Blog/Index', ['posts' => $posts]);
    }
}