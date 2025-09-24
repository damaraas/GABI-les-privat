<template>
    <Navbar></Navbar>

    <!-- HERO -->
    <section class="w-full">
        <!-- Banner -->
        <img src="\public\img\diskon\bannerTrialGABI.png" alt="Promo Trial GABI" class="w-full h-auto"/>
    </section>

    <!-- PROMO DESCRIPTION -->
    <main class="flex-1">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-2xl md:text-3xl font-bold text-center">
                Promo Kelas Trial & Diskon GABI Les Privat
            </h1>
            <h3 class="text-center mt-4 text-black max-w-3xl mx-auto">
                Di <span class="font-bold">GABI Les Privat</span>,
                Ayah/Bunda bisa mencoba kelas trial terlebih dahulu agar anak
                merasa nyaman sebelum lanjut mendaftar penuh. Dengan tutor
                berpengalaman dan
                <span class="font-bold">diskon khusus</span>, belajar jadi
                lebih hemat sekaligus menyenangkan.
            </h3>

            <!-- Kenapa Harus Coba Trial & Paket Hemat GABI? -->
            <div class="mt-8 bg-primary font-sans rounded-2xl p-6 md:p-8 flex flex-col md:flex-row gap-6 items-center shadow">
                <div class="flex-1">
                    <h2 class="text-2xl font-semibold text-white">
                        Kenapa Harus Coba Trial & Paket Hemat GABI?
                    </h2>
                    <ul class="mt-4 list-disc list-inside text-white space-y-2 text-base">
                        <li>
                            Anak bisa kenalan dulu dengan tutor, sementara orang tua bisa melihat langsung cara mengajar. 
                        </li>
                        <li>
                            Dalam 60 menit, Ayah/Bunda dapat memastikan apakah anak nyaman belajar bersama tutor GABI. 
                        </li>
                        <li>
                            Dapatkan diskon 10% untuk paket 1 bulan (8x pertemuan). 
                        </li>
                        <li>
                            Gratis bahan ajar/referensi belajar berbentuk softfile. 
                        </li>
                        <li>
                            Sistem belajar fleksibel: bisa online atau tutor datang ke rumah. 
                        </li>
                        <li>
                            Untuk semua jenjang pendidikan (TK, SD, SMP, SMA) dan semua mata pelajaran nasional maupun internasional.
                        </li>
                    </ul>
                </div>

                <div class="w-3xs flex-shrink-0">
                    <img
                        src="/public/img/maskot/Admin Gabi CTA (pakai bohlam).png"
                        alt="Kenapa coba"
                        class="w-full"
                    />
                </div>
            </div>

            <!-- Terms & CTA -->
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                <div>
                    <h2 class="text-2xl font-semibold">
                        Syarat & Ketentuan Promo GABI
                    </h2>
                    <ul class="mt-3 space-y-2 text-black list-disc list-inside">
                        <li>
                            Promo berlaku untuk pendaftaran baru (siswa yang belum pernah les di gabi) 
                        </li>
                        <li>
                            Trial Rp50.000 hanya berlaku untuk 1x pertemuan pertama, durasi 60 menit. 
                        </li>
                        <li>
                            Diskon 10% berlaku untuk pembayaran paket 1 bulan (8x pertemuan) maksimal 3 hari setelah trial. 
                        </li>
                        <li>
                            Gratis EBOOK DAN LATIHAN SOAL hanya untuk jenjang TK–SMA + (materi disesuaikan mata pelajaran). 
                        </li>
                        <li>
                            Promo tidak dapat digabung dengan promo lainnya. 
                        </li>
                        <li>
                            Jadwal trial & les reguler akan dikonfirmasi sesuai ketersediaan tutor.  
                        </li>
                        <li>
                           Pembayaran dilakukan via transfer ke rekening resmi GABI Les Privat.
                        </li>
                    </ul>

                    <div class="mt-6">
                        <button class="bg-green-600 text-white px-4 py-4 rounded-md shadow inline-flex items-center gap-2">
                            KLAIM PROMO SEKARANG!
                            <img src="/public/img/iconsocialmedia/faWhatsapp.png" alt="Icon Whatsapp">
                        </button>
                        
                    </div>
                </div>

                <div class="w-3xs flex-shrink-0">
                    <img src="/public/img/maskot/Maskot-cta.png" alt="Kenapa coba" class="w-full"/>
                </div>
            </div>
            <div class="py-12">
                <h1 class="text-2xl md:text-3xl font-semibold text-center">
                    Rasakan pengalaman belajar dengan tutor berpengalaman, belajar nyaman, hemat, dan fleksibel mulai dari trial.<br></br>
                    Yuk, coba dulu kelasnya dan klaim diskon spesial dari GABI!
                </h1>
            </div>
        </div>
    </main>

    <Footer></Footer>
</template>

<script setup>
// import AppLayout from "../Layouts/AppLayout.vue";
import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";
</script>
