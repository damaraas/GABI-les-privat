<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import { SiWhatsapp } from "vue-icons-plus/si";
</script>

<template>
    <AppLayout>

        <!-- HERO BANNER PROMO TRIAL -->
        <section class="w-full">
            <img src="\public\img\diskon\bannerTrialGABI.png" alt="Promo Trial GABI" class="w-full h-auto"/>
        </section>

        <!-- Promo Kelas Trial & Diskon GABI Les Privat -->
        <section>
            <div class="container font-poppins mx-auto px-4 py-8"> 
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
            <div class="container font-poppins mx-auto px-4 py-8">
                <div class="bg-primary rounded-2xl p-6 md:p-8 flex flex-col md:flex-row gap-6 items-center shadow">
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
            </div>
        </section>

        <!-- Syarat & Ketentuan Promo GABI -->
        <section>
            <div class="container font-poppins mx-auto px-4 py-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                    <!-- Left Content -->
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

                        <!-- CTA Button -->
                        <div class="mt-6">
                            <a
                            :href="whatsappLink"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="bg-[#00C13E] text-white px-4 py-4 rounded-md shadow-2xl inline-flex items-center gap-2 hover:bg-green-500 transition duration-300">
                                KLAIM PROMO SEKARANG!<SiWhatsapp class="mr-2 w-4 h-4 sm:w-5 sm:h-5" />
                            </a>
                        </div>
                    </div>

                    <!-- Right Image Bulet -->
                    <div class="w-full flex justify-center self-stretch items-center">
                        <div class="w-64 h-64 rounded-full bg-primary flex items-center justify-center shadow-lg">
                            <img :src="mascotImage" alt="Maskot GABI" class="w-80 h-80"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rasakan pengalaman belajar -->
        <section>
            <div class="container font-poppins mx-auto px-4 py-8">
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
export default {
  name: "PromoTerms",
  props: {
    whatsappLink: {
      type: String,
      default:
        "https://wa.me/6281234567890?text=Halo%20saya%20mau%20klaim%20promo!",
    },
    mascotImage: {
      type: String,
      default: "/img/maskot/Maskot-cta.png",
    },
  },
};
</script>
