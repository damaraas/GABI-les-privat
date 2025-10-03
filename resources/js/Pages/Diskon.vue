<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import { SiWhatsapp } from "vue-icons-plus/si";
</script>

<template>
    <AppLayout>
    <Head title="Promo Kelas Trial & Diskon GABI Les Privat" />

        <!-- HERO BANNER PROMO TRIAL -->
        <section class="w-full">
            <img src="\public\img\diskon\bannerTrialGABI.webp" alt="Promo Trial GABI" class="w-full h-auto"/>
        </section>

        <!-- Promo Kelas Trial & Diskon GABI Les Privat -->
        <section>
            <div class="container font-poppins mx-auto px-5 py-4 md:px-10 md:py-8"> 
                <h1 class="text-2xl md:text-3xl font-bold text-center">
                    Promo Kelas Trial & Diskon GABI Les Privat
                </h1>
                <h3 class="text-center mt-4 text-black max-w-3xl mx-auto">
                    Di <span class="font-bold">GABI Les Privat</span>,
                    Ayah/Bunda bisa mencoba <span class="font-bold">kelas trial</span> terlebih dahulu agar anak
                    merasa nyaman sebelum lanjut mendaftar penuh. Dengan tutor
                    berpengalaman dan
                    <span class="font-bold">diskon khusus</span>, belajar jadi
                    lebih hemat sekaligus menyenangkan.
                </h3>
            </div>
        </section>

        <!-- Kenapa Harus Coba Trial & Paket Hemat GABI? -->
        <section>
            <div class="container font-poppins mx-auto px-5 py-4 md:px-10 md:py-8">
                <div class="bg-primary rounded-2xl items-end shadow-md grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex-1 p-4 md:p-8 md:col-span-2">
                        <h2 class="text-base md:text-2xl font-semibold text-white">
                            Kenapa Harus Coba Trial & Paket Hemat GABI?
                        </h2>
                        <ul class="mt-3 text-base md:text-base list-disc list-outside pl-6 text-white">
                            <li>
                                Anak bisa kenalan dulu dengan tutor, sementara orang tua bisa melihat langsung cara mengajar. 
                            </li>
                            <li>
                                Dalam 60 menit, Ayah/Bunda dapat memastikan apakah anak nyaman belajar bersama tutor GABI. 
                            </li>
                            <li>
                                Dapatkan <span class="font-bold">diskon 10%</span> untuk paket 1 bulan (8x pertemuan). 
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

                    <div class="w-xs">
                        <img src="/public/img/maskot/Admin Gabi CTA (pakai bohlam).webp" alt="Maskot admin pakai bohlam"/>
                    </div>
                </div>
            </div>
        </section>

        <!-- Syarat & Ketentuan Promo GABI -->
        <section>
            <div class="container font-poppins mx-auto px-5 py-4 md:px-10 md:py-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                    <!-- Left Content -->
                    <div class="p-4 md:p-8">
                        <h2 class="text-base md:text-2xl font-semibold">
                            Syarat & Ketentuan Promo GABI
                        </h2>
                        <ul class="mt-3 text-base text-black list-disc list-outside pl-6">
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

                        <!-- CTA Button -->
                        <div class="mt-6">
                            <a
                            :href="whatsappLink"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="bg-[#00C13E] text-white font-bold text-base px-4 py-4 rounded-md shadow-2xl inline-flex items-center gap-2 hover:bg-green-500 transition duration-300">
                                KLAIM PROMO SEKARANG!<SiWhatsapp class="mr-2 w-4 h-4 sm:w-5 sm:h-5" />
                            </a>
                        </div>
                    </div>

                    <!-- Right Image Bulet -->
                    <div class="w-full flex justify-center self-stretch items-center">
                        <div class="w-72 h-72 rounded-full bg-primary flex items-center justify-center overflow-visible">
                            <img :src="mascotImage" alt="Maskot GABI" class="h-96 object-contain drop-shadow-xl absolute -translate-y-6"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rasakan pengalaman belajar -->
        <section>
            <div class="container font-poppins mx-auto px-5 py-4 md:px-10 md:py-8">
                <h1 class="text-2xl md:text-3xl font-semibold text-center">
                    Rasakan pengalaman belajar dengan tutor berpengalaman, <br></br>
                    belajar nyaman, hemat, dan fleksibel mulai dari trial.<br></br>
                    Yuk, coba dulu kelasnya dan klaim diskon spesial dari GABI!
                </h1>
            </div>
        </section>
        
    </AppLayout>
</template>

<script>
const message = "Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu? 😊";

export default {
  name: "PromoTerms",
  props: {
    whatsappLink: {
      type: String,
      default: `https://wa.me/6285712230349?text=${encodeURIComponent(message)}`,
    },
    mascotImage: {
      type: String,
      default: "/img/maskot/maskot-cta-1.webp",
    },
  },
};
</script>


