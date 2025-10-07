<script setup>
import AppLayout from '../Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
import { SiWhatsapp } from "vue-icons-plus/si";
</script>

<template>
    <AppLayout>
        <Head title="Road to Campus 2026 - Gabi Les Privat" />

        <!-- SECTION 1: HERO -->
        <section>
            <div class="bg-[#FDD734] py-16 px-6 md:px-20 flex flex-col md:flex-row items-center justify-between font-poppins">
                <div class="md:w-1/2 space-y-4 text-left">
                    <h1 class="text-5xl md:text-4xl font-extrabold text-black leading-snug">
                        Road to Campus 2026, Siap Hadapi TKA Bareng Gabi!
                    </h1>
                    <p class="text-black text-base leading-relaxed text-justify">
                        Buat kamu yang lagi bersiap ikut <b>SNBT 2026</b>, ada satu tahap yang sering bikin pusing tapi sangat menentukan keberhasilan kamu, yaitu
                        <b>Tes Kemampuan Akademik (TKA)</b>. Soal-soalnya menantang, dan membutuhkan pemahaman komprehensif di berbagai mata pelajaran.
                    </p>
                    <p class="text-black text-base text-justify">
                        Tapi kabar baiknya, kamu nggak harus menghadapi ini sendirian.
                        <b>Bersama Gabi</b>, persiapan TKA bisa lebih terarah, fleksibel, dan pastinya efektif.
                        Inilah saatnya kamu mulai perjalanan <b>Road to Campus 2026!</b>
                    </p>
                </div>
                
                <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
                    <img
                        src="\public\img\campaigntka\poster1.png"
                        alt="Road to Campus Gabi"
                        class="rounded-xl w-80 md:w-[420px]"
                    />
                </div>
            </div>
        </section>

        <!-- SECTION 2: KENAPA BELAJAR DI GABI -->
        <section>
            <div class="py-16 px-6 md:px-20 bg-white flex justify-center font-poppins">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Kenapa Belajar di Gabi?</h2>
                    <p class="text-black mb-6 max-w-2xl">
                        Sebagai <b>bimbel SNBT terbaik</b>, Gabi menawarkan fleksibilitas belajar tanpa batas.
                        Kamu bisa mengakses materi, video pembelajaran, hingga try out kapan saja dan di mana saja.
                    </p>
                    <div class="bg-primary rounded-xl p-6 text-white space-y-2 max-w-2xl flex ">
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Materi lengkap sesuai kisi-kisi resmi SNBT.</li>
                            <li>Try out rutin untuk melatih kecepatan dan strategi mengerjakan soal.</li>
                            <li>Tutor kompeten dan bisa sesuaikan gaya belajarmu.</li>
                            <li>Pilihan les privat SNBT untuk kamu yang butuh pendampingan intensif.</li>
                            <li>Strategi paling ampuh dalam menghadapi TKA juga bisa kamu dapatkan.</li>
                        </ul>
                        <img src="/public/img/maskot/Maskot Gabi (Bola Lampu megang Pena).png" alt="Maskot Gabi (Bola Lampu megang Pena)" class="w-32 h-auto object-contain">
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: FLEKSIBEL DAN RAMAH GEN Z -->
        <section>
            <div class="py-16 px-6 md:px-20 bg-white flex justify-center font-poppins">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Fleksibel dan Ramah Gen Z</h2>
                    <div class="rounded-xl p-6 text-black space-y-2 max-w-2xl flex">
                        <div class="bg-[#FDD734] rounded-full flex items-center justify-center">
                            <img src="/public/img/maskot/maskot-buku-1.webp" alt="Maskot Gabi (Bola Lampu megang Pena)" class="w-32 h-auto object-contain">
                        </div>
                        <p class="text-justify">
                            Gabi kasih kamu kebebasan untuk atur waktu belajar. 
                            Bahkan tutor yang kamu pilih akan menyesuaikan karakter, kepribadian, dan 
                            gaya belajar kamu!Tentunya ga perlu ragu kalau kamu pengen persiapan lebih serius, 
                            karena Gabi memang dirancang jadi <b>bimbel PTN terbaik</b> buat Gen Z yang mau tembus kampus impian.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: LES PRIVAT CTA -->
        <section>
            <div class="py-16 px-6 md:px-20 bg-white flex justify-center">
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
            <div class="bg-[#11B2F7] text-white py-16 px-6 md:px-20 text-center flex justify-center font-poppins">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">
                        Yuk, mulai perjalananmu bareng Gabi, <br></br> 
                        bimbel SNBT terbaik dan wujudkan mimpi <br></br>
                        tembus PTN favoritmu di 2026! <br></br> 
                        Konsultasikan rencana Road to Campus 2026 <br></br>
                        kamu dengan MinBi sekarang!
                    </h2>
                    <a
                        href="https://wa.me/6285712230349?text=Halo%20Minbi%2C%20saya%20tertarik%20daftar%20Les%20Persiapan%20UTBK%2C%20bisa%20dibantu%3F%20Terima%20kasih."
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 bg-[#08CB00] text-white font-bold text-lg px-6 py-4 rounded-xl shadow-2xl hover:bg-green-500 transition duration-300"
                    >
                        <SiWhatsapp class="mr-2 w-4 h-4 sm:w-5 sm:h-5" />Tanya Sekarang
                    </a>
                </div>    
            </div>
        </section>

    </AppLayout>
</template>
