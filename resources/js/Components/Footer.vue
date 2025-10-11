<script setup>
import { Link } from "@inertiajs/vue3";
import { SiWhatsapp } from "vue-icons-plus/si";
import { AiOutlineMail } from "vue-icons-plus/ai";
import { BsInstagram } from "vue-icons-plus/bs";
import { FaTiktok } from "vue-icons-plus/fa";
import { AiOutlineYoutube } from "vue-icons-plus/ai";
import { BsFacebook } from "vue-icons-plus/bs";
import { BsLinkedin } from "vue-icons-plus/bs";

</script>

<template>
    <footer class="bg-dark text-white text-center py-4">
      <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 lg:gap-8 py-8 sm:py-18 lg:py-18 px-6 sm:px-12 lg:px-25 text-left">
      
      <!-- Kolom 1 -->
      <div class="md:col-span-3 lg:col-span-1 md:text-center lg:text-left">
        <img src="../../../public/img/logo/GABIPutih.webp" alt="GABI les privat" class="w-45 lg:w-50 block md:mx-auto lg:mx-0 mx-0">
        <h3 class="font-bold mb-5">Part of GATRACO MITRA SEJAHTERA</h3>
        <p>Suncity Square, Jl. Mayor Madmuin Hasibuan Blok E No.19, RT.004/RW.002, Marga Jaya, Kec.
            Bekasi Sel, Kota Bks, Jawa Barat 17141, Indonesia.</p>
      </div>
      
      <!-- Kolom 2 -->
      <div>
        <h3 class="font-bold mb-4">PROGRAM LES PRIVAT</h3>
        <ul class="space-y-2">
          <li>
            <a href="#" class="hover:underline">Les Privat TK</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Les Privat SD</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Les Privat SMP</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Les Privat SMA</a>
          </li>
          <li>
            <a href="/campaigntka" class="hover:underline">Les Persiapan UTBK</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Les Coding</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Les Privat Mengaji</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Program English Nasional & Cambridge Kurikulum</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Les Privat Bahasa Mandarin</a>
          </li>
        </ul>
      </div>

      <!-- Kolom 3 -->
      <div class="flex flex-col sm:flex-row gap-6 lg:flex-col md:col-span-2 lg:col-span-1">
        <div>
          <h3 class="font-bold mb-4">LOKASI</h3>
        <div class="grid grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-4 md:gap-0">
          <p>
            Jakarta <br>
            Bekasi <br>
            Depok <br>
            Tangerang <br>
            Semarang
          </p>
          <p>
            Surabaya <br>
            Bogor <br>
            Malang <br>
            Solo Raya
          </p>
        </div>
        </div>

        <div class="md:ml-33 lg:ml-0">
          <h3 class="font-bold lg:mt-6 mb-4">BANTUAN</h3>
        <ul class="space-y-1">
          <li>
            <Link href="/tentang" class="hover:underline">Tentang GABI</Link>
          </li>
          <li>
            <Link href="/promo" class="hover:underline">Promo GABI</Link>
          </li>
          <li>
            <Link href="/faq-bantuan" class="hover:underline">FAQ & Bantuan</Link>
          </li>
          <li>
            <Link href="/" class="hover:underline">Trial Gratis</Link>
          </li>
          <li>
            <Link href="/" class="hover:underline">Karier</Link>
          </li>
          <li>
            <Link href="/" class="hover:underline">Blog</Link>
          </li>
          <li>
            <Link href="/" class="hover:underline">Press</Link>
          </li>
        </ul>
        </div>
      </div>
      
      <!-- Kolom 4 -->
      <div class="md:col-span-3 lg:col-span-1 flex flex-wrap md:justify-between md:items-start">
        <div>
          <h3 class="font-bold mb-4">HUBUNGI KAMI</h3>
        <ul class="space-y-2">
          <li><a href="https://wa.me/6285712230349" class="hover:underline flex items-center"><SiWhatsapp class="mr-2 w-4 h-4" />0857-1223-0349</a></li>
          <li><a href="mailto:bimbelprivatjkt@gmail.com" class="hover:underline flex items-center"><AiOutlineMail class="mr-2 w-4 h-4" />bimbelprivatjkt@gmail.com</a></li>
        </ul>
        </div>

        <div class="mt-12 lg:mt-36 flex-1 flex justify-center md:justify-end">
        <ul class="flex justify-center lg:items-center gap-4">
          <li><a href="https://www.instagram.com/gatracobimbel" class=""><BsInstagram class="mr-2 w-8 h-8" /></a></li>
          <li><a href="https://www.tiktok.com/@gatracobimbel" class=""><FaTiktok class="mr-2 w-8 h-8" /></a></li>
          <li><a href="#" class=""><AiOutlineYoutube class="mr-2 w-8 h-8" /></a></li>
          <li><a href="https://www.facebook.com/bimbel.privat.jakarta" class=""><BsFacebook class="mr-2 w-8 h-8" /></a></li>
          <li><a href="https://www.linkedin.com/company/pt-gatraco-mitra-sejahtera" class=""><BsLinkedin class="mr-2 w-8 h-8" /></a></li>
        </ul>
      </div>
      </div>

    <!-- Copyright -->
    </div>
      <div class="border-t border-2 border-white mx-8 mb-4"></div>
      <p>&copy; {{ new Date().getFullYear() }} Gabi Les Privat. All rights reserved.</p>
    </footer>
</template>