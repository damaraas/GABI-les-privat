<script setup>
import AppLayout from '../Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
import { SiWhatsapp } from "vue-icons-plus/si";
</script>

<template>
    <AppLayout>
        <Head title="Road to Campus 2026 - Siap Hadapi TKA Bareng Gabi!" />
        
        <!-- SECTION 1: HERO -->
        <section>
            <div class="bg-[#FDD734] px-6 md:px-20 flex flex-col md:flex-row items-start md:items-center justify-between font-poppins relative overflow-visible">
                <!-- KIRI -->
                <div class="md:w-1/2 py-12 space-y-4 text-left z-10 relative">
                    <h1 class="text-5xl md:text-4xl font-extrabold text-black leading-snug">
                        Road to Campus 2026, Siap Hadapi TKA Bareng Gabi!
                    </h1>
                    <p class="text-black text-base leading-relaxed text-justify">
                        Buat kamu yang lagi bersiap ikut <b>SNBT 2026</b>, ada satu tahap yang sering bikin pusing tapi sangat menentukan keberhasilan kamu, yaitu
                        <b>Tes Kemampuan Akademik (TKA)</b>. Soal-soalnya menantang, dan membutuhkan pemahaman komprehensif di berbagai mata pelajaran.
                        Tapi kabar baiknya, kamu nggak harus menghadapi ini sendirian.
                        <b>Bersama Gabi</b>, persiapan TKA bisa lebih terarah, fleksibel, dan pastinya efektif.
                        Inilah saatnya kamu mulai perjalanan <b>Road to Campus 2026!</b>
                    </p>
                </div>
                <!-- === VERSI DESKTOP === -->
                <div class="hidden md:flex md:w-1/2 justify-center relative h-[450px] overflow-visible">
                    <div class="w-[360px] h-[360px] rounded-full bg-[#11B2F7] absolute bottom-0 left-1/2 -translate-x-1/2 flex items-center justify-center overflow-visible">
                        <img
                            src="\public\img\campaigntka\poster1.png"
                            alt="Road to Campus Gabi"
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 drop-shadow-2xl w-[360px] h-auto"
                        />
                    </div>
                </div>
                <!-- === VERSI MOBILE === -->
                <div class="flex md:hidden justify-end items-end relative w-full overflow-visible mt-40">
                    <div class="w-48 h-48 rounded-full bg-[#11B2F7] absolute bottom-0 right-0 flex items-center justify-center overflow-visible">
                        <img
                            src="\public\img\campaigntka\poster1.png"
                            alt="Road to Campus Gabi"
                            class="absolute bottom-0 right-0 drop-shadow-2xl w-[220px] h-auto"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: KENAPA BELAJAR DI GABI -->
        <section>
            <div class="py-12 px-6 md:px-6 bg-white flex justify-center font-poppins">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Kenapa Belajar di Gabi?</h2>
                    <p class="text-black mb-6 max-w-3xl">
                        Sebagai <b>bimbel SNBT terbaik</b>, Gabi menawarkan fleksibilitas belajar tanpa batas.
                        Kamu bisa mengakses materi, video pembelajaran, hingga try out kapan saja dan di mana saja.
                    </p>
                    <div class="bg-primary rounded-xl p-6 text-white space-y-4 max-w-3xl flex flex-col md:flex-row items-center md:items-start justify-between">
                        <ul class="list-disc pl-5 space-y-1 text-justify">
                            <li>Materi lengkap sesuai kisi-kisi resmi SNBT.</li>
                            <li>Try out rutin untuk melatih kecepatan dan strategi mengerjakan soal.</li>
                            <li>Tutor kompeten dan bisa sesuaikan gaya belajarmu.</li>
                            <li>Pilihan les privat SNBT untuk kamu yang butuh pendampingan intensif.</li>
                            <li>Strategi paling ampuh dalam menghadapi TKA juga bisa kamu dapatkan.</li>
                        </ul>
                        <img 
                            src="/public/img/maskot/Maskot Gabi (Bola Lampu megang Pena).png" 
                            alt="Maskot Gabi (Bola Lampu megang Pena)" 
                            class="w-32 h-auto object-contain mt-4 md:mt-0"
                        >
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: FLEKSIBEL DAN RAMAH GEN Z -->
        <section>
            <!-- Versi Web  -->
            <div class="hidden md:flex py-12 px-6 md:px-20 bg-white justify-center font-poppins">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Fleksibel dan Ramah Gen Z</h1>
                    <div class="grid grid-cols-3 gap-4 p-6 text-black space-y-2 max-w-3xl items-center justify-center">
                        <div class="flex justify-center">
                            <div class="bg-[#FDD734] rounded-full flex items-center justify-center overflow-hidden w-40 h-40">
                                <img src="/public/img/maskot/maskot-buku-1.webp" alt="Maskot Gabi (Bola Lampu megang Pena)" class="w-40 h-auto object-contain">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <p class="text-justify text-base">
                                Gabi kasih kamu kebebasan untuk atur waktu belajar. 
                                Bahkan tutor yang kamu pilih akan menyesuaikan karakter, kepribadian, dan 
                                gaya belajar kamu! Tentunya ga perlu ragu kalau kamu pengen persiapan lebih serius, 
                                karena Gabi memang dirancang jadi <b>bimbel PTN terbaik</b> buat Gen Z yang mau tembus kampus impian.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Versi Mobile -->
            <div class="block md:hidden py-12 px-6 bg-white font-poppins">
                <h1 class="text-2xl font-bold text-gray-900 mb-6">Fleksibel dan Ramah Gen Z</h1>
                <div class="flex items-center justify-center gap-4">
                    <!-- Gambar -->
                    <div class="bg-[#FDD734] rounded-full flex items-center justify-center overflow-hidden w-32 h-32 shrink-0">
                        <img src="/public/img/maskot/maskot-buku-1.webp" alt="Maskot Gabi (Buku Ramah Gen Z)" class="w-28 h-auto object-contain">
                    </div>
                    <!-- Paragraf pendek di samping gambar -->
                    <p class="text-base text-justify">
                        Gabi kasih kamu kebebasan untuk atur waktu belajar. 
                        Bahkan tutor yang kamu pilih akan menyesuaikan karakter, kepribadian, dan gaya belajar kamu!
                    </p>
                </div>
                <!-- Paragraf lanjutan di bawah -->
                <p class="text-base text-justify mt-4">
                    Tentunya ga perlu ragu kalau kamu pengen persiapan lebih serius, 
                    karena Gabi memang dirancang jadi <b>bimbel PTN terbaik</b> buat Gen Z yang mau tembus kampus impian.
                </p>
            </div>
        </section>

        <!-- SECTION 4: LES PRIVAT CTA -->
        <section>
            <div class="py-12 px-6 md:px-20 bg-white flex justify-center">
                <div class="flex flex-col justify-center text-black font-poppins">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6">Jangan Tunggu Sampai Mepet!</h2>
                    <img
                        src="/public/img/campaigntka/Poster Blog Campaign.png"
                        alt="Les Privat TKA Gabi"
                        class="rounded shadow-lg w-full max-w-3xl"
                    />
                    <p class="mt-6 max-w-3xl leading-relaxed text-justify">
                        Persaingan masuk PTN makin ketat tiap tahun. Kalau kamu nunda persiapan, 
                        kesempatan bisa makin kecil. Makanya, mulailah lebih awal biar punya keunggulan.
                        Di campaign Road to Campus 2026, Gabi siap ngasih penawaran spesial yang bikin 
                        persiapanmu makin ringan dan terjangkau. Kamu bisa coba <b>trial class gratis</b>, 
                        nikmatin <b>diskon khusus</b> untuk pendaftar awal, dan buru-buru ikutan <b>flash sale</b> 
                        biar lebih hemat.
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION 5: CTA -->
        <section>
            <div class="bg-[#11B2F7] text-white py-12 px-6 md:px-20 text-center flex justify-center font-poppins">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">
                        Yuk, mulai perjalananmu bareng Gabi, <br></br> 
                        bimbel SNBT terbaik dan wujudkan mimpi <br></br>
                        tembus PTN favoritmu di 2026! <br></br> 
                        Konsultasikan rencana Road to Campus 2026 <br></br>
                        kamu dengan MinBi sekarang!
                    </h2>
                    <div class="flex items-center gap-4 justify-center">
                        <!-- BUTTON -->
                        <a
                            href="https://wa.me/6285712230349?text=Halo%20Minbi%2C%20saya%20tertarik%20daftar%20Les%20Persiapan%20UTBK%2C%20bisa%20dibantu%3F%20Terima%20kasih."
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 bg-[#08CB00] text-white font-bold text-lg px-6 py-4 rounded-xl shadow-2xl hover:bg-green-500 transition duration-300"
                        >
                            <SiWhatsapp class="w-5 h-5" />Tanya Sekarang
                        </a>
                        <!-- GAMBAR -->
                        <img
                            :src="mascotImage"
                            alt="Maskot GABI"
                            class="w-24 h-auto object-contain drop-shadow-xl"
                        />
                    </div>
                </div>    
            </div>
        </section>

    </AppLayout>
</template>

<script>
export default {
  name: "PromoTerms",
  props: {
    mascotImage: {
      type: String,
      default: "/img/maskot/maskot-cta-1.webp",
    },
  },
};
</script>
