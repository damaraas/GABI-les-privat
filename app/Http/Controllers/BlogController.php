<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->get();

        return Inertia::render('Blog/Index', [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'published') // hanya yang published
            ->firstOrFail();

        $blog->content = preg_replace(
            '/<p[^>]*>\s*(?:<strong>)?\s*Baca juga\s*:\s*(.*?)\s*(?:<\/strong>)?\s*<\/p>/is',
            '<p class="related-link">🔗 Baca juga: $1</p>',
            $blog->content
        );

        $blog->content = preg_replace(
            '/<p[^>]*>\s*(?:<strong>)?\s*Sumber\s*:\s*(.*?)(?:<\/strong>)?\s*<\/p>/is',
            '<p class="source-link">Sumber: $1</p>',
            $blog->content
        );

        return inertia('Blog/Show', [
            'blog' => $blog,
            'meta' => [
                'title' => $blog->title,
                'meta_title' => $blog->meta_title,
                'description' => $blog->meta_description,
                'keywords' => $blog->meta_keywords,
            ],
        ]);
    }

    // public function index()
    // {
    //     $posts = [
    //         [
    //             'id' => 1,
    //             'thumbnail' => 'img/artikel1/a2.webp',
    //             'judul' => 'Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan',
    //             'konten' => 'Hayoo, siapa di sini yang masih malas membaca? Merujuk dari quotes di atas, seharusnya bisa memotivasi 
    //                 kamu untuk lebih giat membaca. Faktanya, banyak orang sebenarnya punya niat membaca, tapi sulit bertahan lebih dari 
    //                 beberapa halaman. Apalagi di era sekarang, ketika notifikasi handphone terasa lebih menarik daripada baris-baris tulisan.',
    //             'tanggal' => '09 Oktober 2025',
    //             'formattanggal' => '2025-10-09',
    //             'slug' => 'cara-membaca-efisien-untuk-anak-SMA-agar-tidak-cepat-bosan',
    //         ],
    //         [
    //             'id' => 2,
    //             'thumbnail' => 'img/artikel2/a1.webp',
    //             'judul' => 'Cara Mengatur Waktu Belajar Efektif dengan Pomodoro Technique',
    //             'konten' => 'Pernah ga sih kamu ngerasa udah belajar berjam-jam tapi tetap nggak paham-paham? 
    //                 Atau baru buka buku 10 menit, eh tangan malah gatal buka Snapgram? Belum lagi rasa bosan yang cepat 
    //                 datang kalau duduk terlalu lama. Tantangan-tantangan seperti ini sering bikin belajar jadi terasa berat dan nggak efisien.',
    //             'tanggal' => '20 Oktober 2025',
    //             'formattanggal' => '2025-10-20',
    //             'slug' => 'cara-mengatur-waktu-belajar-efektif-dengan-pomodoro-technique',
    //         ],
    //         [
    //             'id' => 3,
    //             'thumbnail' => 'img/artikel3/a1.webp',
    //             'judul' => 'Trik Cepat Kuasai Ujian TOEFL Listening, Reading, dan Writing',
    //             'konten' => 'Pelajari trik cepat dan efektif menghadapi ujian TOEFL. Kuasai skill Listening, Reading, dan Writing dengan strategi belajar yang terbukti sukses!',
    //             'tanggal' => '22 Oktober 2025',
    //             'formattanggal' => '2025-10-22',
    //             'slug' => 'trik-cepat-kuasai-ujian-toefl-listening-reading-dan-writing',
    //         ],
    //         [
    //             'id' => 4,
    //             'thumbnail' => 'img/artikel4/a2.webp',
    //             'judul' => '5 Manfaat Belajar Bahasa Mandarin untuk Masa Depan',
    //             'konten' => 'Di era globalisasi seperti sekarang, penguasaan bahasa asing menjadi salah satu keterampilan penting yang bisa membuka banyak peluang. Dari sekian banyak bahasa asing, Bahasa Mandarin menempati posisi yang sangat strategis. Mengapa? Karena Mandarin bukan hanya bahasa sehari-hari bagi lebih dari satu miliar orang di dunia, tetapi juga kunci untuk memahami budaya, bisnis, dan pendidikan di Tiongkok yang kini berkembang pesat.',
    //             'tanggal' => '22 Oktober 2025',
    //             'formattanggal' => '2025-10-22',
    //             'slug' => '5-manfaat-belajar-bahasa-mandarin-untuk-masa-depan',
    //         ],
    //         [
    //             'id' => 5,
    //             'thumbnail' => 'img/artikel5/a2.webp',
    //             'judul' => 'Cara Jitu Persiapan UTBK SNBT agar Meraih Skor Tinggi',
    //             'konten' => 'UTBK SNBT (Seleksi Nasional Berdasarkan Tes) adalah salah satu momen paling menegangkan bagi para siswa SMA yang bercita-cita masuk perguruan tinggi negeri favorit. Setiap tahunnya, ratusan ribu peserta berjuang memperebutkan kursi yang jumlahnya terbatas. Tantangannya bukan hanya soal persaingan nih, tapi juga bagaimana mempersiapkan diri secara efektif agar bisa meraih skor tinggi.',
    //             'tanggal' => '22 Oktober 2025',
    //             'formattanggal' => '2025-10-22',
    //             'slug' => 'Cara-Jitu-Persiapan-UTBK-SNBT-agar-Meraih-Skor-Tinggi',
    //         ],
    //         [
    //             'id' => 6,
    //             'thumbnail' => 'img/artikel6/a1.webp',
    //             'judul' => '5 Fun Fact Menarik tentang Metode Montessori Privat yang Bikin Anak Betah Belajar',
    //             'konten' => 'Metode Montessori adalah pendekatan belajar yang dikembangkan oleh Dr. Maria Montessori pada awal abad ke-20. Filosofinya menekankan kebebasan, eksplorasi, dan pembelajaran yang dipersonalisasi sesuai kebutuhan anak.',
    //             'tanggal' => '22 Oktober 2025',
    //             'formattanggal' => '2025-10-22',
    //             'slug' => '5-Fun-Fact-Menarik-tentang-Metode-Montessori-Privat-yang-Bikin-Anak-Betah-Belajar',
    //         ],
    //         [
    //             'id' => 7,
    //             'thumbnail' => 'img/artikel7/a2.webp',
    //             'judul' => 'Cara Cepat Jago Speaking dan Grammar dengan Les Privat Bahasa Inggris',
    //             'konten' => 'Bahasa Inggris sekarang udah kayak “skill wajib” buat anak muda. Mau nonton film tanpa subtitle, main game online, sampai bikin tugas sekolah atau persiapan kuliah, semua butuh bahasa Inggris. Bahkan banyak beasiswa atau lomba akademik yang syarat utamanya adalah kemampuan bahasa Inggris. Jadi, kalau kamu pengen punya lebih banyak peluang di masa depan, speaking dan grammar harus mulai dilatih dari sekarang.',
    //             'tanggal' => '22 Oktober 2025',
    //             'formattanggal' => '2025-10-22',
    //             'slug' => 'cara-cepat-jago-speaking-dan-grammar-dengan-les-privat-bahasa-inggris',
    //         ],
    //         [
    //             'id' => 8,
    //             'thumbnail' => 'img/artikel8/a3.webp',
    //             'judul' => 'Les Privat Matematika Menyenangkan dengan 4 Tips Efektif untuk Anak',
    //             'konten' => 'Banyak anak sekolah yang langsung “angkat tangan” saat mendengar kata matematika. Bagi mereka, angka-angka terasa rumit, rumus bikin pusing, dan soal cerita seringkali membingungkan. Tidak sedikit yang kemudian berkata, “Aku nggak bisa matematika, ini bukan pelajaran buat aku.” Padahal, kunci utama agar anak bisa menguasai matematika adalah menemukan cara belajar yang sesuai dan membuat mereka nyaman.',
    //             'tanggal' => '29 Oktober 2025',
    //             'formattanggal' => '2025-10-29',
    //             'slug' => 'Les-Privat-Matematika-Menyenangkan-dengan-4-Tips-Efektif-untuk-Anak',
    //         ],
    //         [
    //             'id' => 9,
    //             'thumbnail' => 'img/artikel9/a3.webp',
    //             'judul' => 'Les Privat Tatap Muka vs Online — Mana yang Lebih Efektif untuk Anak?',
    //             'konten' => 'Di era digital seperti sekarang, banyak orang tua yang bingung memilih antara les privat tatap muka atau online. Keduanya punya kelebihan dan kekurangan masing-masing. Tatap muka memungkinkan anak berinteraksi langsung dengan guru, memudahkan pemahaman lewat bahasa tubuh dan ekspresi. Sementara kelas online menawarkan fleksibilitas waktu dan tempat, cocok untuk anak yang aktif dan punya jadwal padat.',
    //             'tanggal' => '29 Oktober 2025',
    //             'formattanggal' => '2025-10-29',
    //             'slug' => 'les-privat-tatap-muka-vs-online-mana-yang-lebih-cocok',
    //         ],
    //         [
    //             'id' => 10,
    //             'thumbnail' => 'img/artikel10/a1.webp',
    //             'judul' => '5 Manfaat Les Privat Calistung untuk Perkembangan Anak Usia Dini',
    //             'konten' => 'Pernah nggak sih bun merasa bingung ketika anak masih ogah-ogahan belajar membaca atau berhitung, padahal sebentar lagi mau masuk SD? Atau mungkin bunda-bunda disini sudah coba berbagai cara, mulai dari membeli buku latihan, aplikasi belajar, sampai ikut kelas kelompok, tapi tetap aja anak lebih senang main dibanding belajar?',
    //             'tanggal' => '29 Oktober 2025',
    //             'formattanggal' => '2025-10-29',
    //             'slug' => '5-manfaat-les-privat-calistung-untuk-perkembangan-anak-usia-dini',
    //         ],
    //         [
    //             'id' => 11,
    //             'thumbnail' => 'img/artikel11/a1.webp',
    //             'judul' => 'Cara Membuat Jadwal Belajar Realistis & Konsisten',
    //             'konten' => 'Temukan panduan lengkap cara membuat jadwal belajar yang realistis, konsisten, dan fleksibel agar progres belajarmu lebih terarah tanpa stres.',
    //             'tanggal' => '29 Oktober 2025',
    //             'formattanggal' => '2025-10-29',
    //             'slug' => 'cara-membuat-jadwal-belajar-realistis-dan-konsisten',
    //         ],
    //         [
    //             'id' => 12,
    //             'thumbnail' => 'img/artikel12/a1.webp',
    //             'judul' => 'Manfaat Les Privat Lebih Efektif Dibanding Belajar Konvensional',
    //             'konten' => 'Pernah merasa belajar di sekolah aja belum cukup? Atau mungkin sudah ikut kursus tambahan, tapi masih bingung juga pas ngerjain soal? Nah, di sinilah les privat bisa jadi solusi. Dibanding cara belajar konvensional di kelas, les privat punya kelebihan yang bikin proses belajar lebih efektif dan nyaman.',
    //             'tanggal' => '29 Oktober 2025',
    //             'formattanggal' => '2025-10-29',
    //             'slug' => 'Manfaat-Les-Privat-Dibanding-Belajar-Konvensional',
    //         ],
    //         // [
    //         //     'id' => 13,
    //         //     'thumbnail' => 'img/artikel13/a1.webp',
    //         //     'judul' => 'Cara Meningkatkan Motivasi Belajar dan Konsentrasi di Rumah',
    //         //     'konten' => 'Belajar di rumah sering kali terasa nyaman, tapi nggak jarang juga bikin kita gampang terdistraksi. Rasa malas, godaan gadget, sampai suasana yang kurang mendukung bisa banget nurunin konsentrasi sekaligus motivasi belajar. Padahal, dua hal ini penting banget biar proses belajar lebih efektif dan hasilnya juga maksimal.',
    //         //     'tanggal' => '30 Oktober 2025',
    //         //     'formattanggal' => '2025-10-30',
    //         //     'slug' => 'Manfaat-Les-Privat-Dibanding-Belajar-Konvensional',
    //         // ],
    //         // [
    //         //     'id' => 15,
    //         //     'thumbnail' => 'img/artikel15/a3.webp',
    //         //     'judul' => 'Kenapa Punya Teman Belajar Bisa Bikin Kamu Lebih Semangat',
    //         //     'konten' => 'Belajar sendirian kadang memang bisa bikin fokus, tapi sering banget berakhir bosen, ngantuk, atau bahkan scrolling HP tanpa sadar. Nah, punya teman belajar bisa jadi solusi buat masalah itu. Ada yang nemenin, ada yang bisa diajak ngobrol soal materi, dan ada yang bisa saling dorong biar nggak gampang nyerah.',
    //         //     'tanggal' => '30 Oktober 2025',
    //         //     'formattanggal' => '2025-10-30',
    //         //     'slug' => 'Kenapa-Punya-Teman-Belajar-Bisa-Bikin-Kamu-Lebih-Semangat',
    //         // ],
    //         // [
    //         //     'id' => 17,
    //         //     'thumbnail' => 'img/artikel17/a1.webp',
    //         //     'judul' => 'Belajar Lebih Fokus Meski Attention Span Pendek Bersama Guru Privat Tatap Muka',
    //         //     'konten' => 'Pernah merasa baru buka buku sebentar, eh tangan tiba-tiba gatel buka ponsel? Atau lagi ngerjain soal, baru lima menit, pikiran langsung melayang ke mana-mana. Fenomena ini sering banget dialami banyak siswa dan mahasiswa sekarang. Dalam dunia psikologi, hal itu dikenal dengan istilah attention span, alias rentang konsentrasi.',
    //         //     'tanggal' => '30 Oktober 2025',
    //         //     'formattanggal' => '2025-10-30',
    //         //     'slug' => 'Belajar-Lebih-Fokus-Meski-Sulit-Konsentrasi-dengan-Guru-Privat',
    //         // ],
    //     ];

    //     usort($posts, function ($a, $b) {
    //         return strtotime($b['formattanggal']) - strtotime($a['formattanggal']);
    //     });


    //     return Inertia::render('Blog/Index', ['posts' => $posts]);
    // }
}
