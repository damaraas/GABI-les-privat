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
      <div class="container mx-auto grid grid-cols-4 gap-16 py-18 px-38 text-left">
      
      <!-- Kolom 1 -->
      <div>
        <img src="../../../public/img/logo/Logo GABI Putih.png" alt="GABI les privat" class="w-50">
        <h3 class="font-bold mb-10">Part of GATRACO MITRA SEJAHTERA</h3>
        <p>Suncity Square, Jl. Mayor Madmuin Hasibuan Blok E No.19, RT.004/RW.002, Marga Jaya, Kec.
            Bekasi Sel, Kota Bks, Jawa Barat 17141, Indonesia.</p>
      </div>
      
      <!-- Kolom 2 -->
      <div>
        <h3 class="font-bold mb-4">PROGRAM LES PRIVAT</h3>
        <p>
          Les Privat TK <br>
          Les Privat SD <br>
          Les Privat SMP <br>
          Les Privat SMA <br>
          Les Persiapan UTBK <br>
          Les Coding <br>
          Les Privat Mengaji <br>
          Program English Nasional dan Cambridge Kurikulum <br>
          Les Privat Bahasa Mandarin
        </p>
      </div>
      
      <!-- Kolom 3 -->
      <div>
        <h3 class="font-bold mb-4">LOKASI</h3>
        <div class="grid grid-cols-2 gap-4">
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
        <br>

        <h3 class="font-bold mt-6 mb-4">BANTUAN</h3>
        <ul class="space-y-2">
          <li>
            <Link to="/" class="hover:underline">Tentang GABI</Link>
          </li>
          <li>
            <Link to="/" class="hover:underline">Promo GABI</Link>
          </li>
          <li>
            <Link to="/" class="hover:underline">FAQ & Bantuan</Link>
          </li>
          <li>
            <Link to="/" class="hover:underline">Trial Gratis</Link>
          </li>
          <li>
            <Link to="/" class="hover:underline">Karier</Link>
          </li>
          <li>
            <Link to="/" class="hover:underline">Blog</Link>
          </li>
          <li>
            <Link to="/" class="hover:underline">Press</Link>
          </li>
        </ul>
      </div>
      
      <!-- Kolom 4 -->
      <div>
        <h3 class="font-bold mb-4">HUBUNGI KAMI</h3>
        <ul class="space-y-2">
          <li><a href="https://wa.me/6285712230349" class="hover:underline flex items-center"><SiWhatsapp class="mr-2 w-4 h-4" />0857-1223-0349</a></li>
          <li><a href="mailto:bimbelprivatjkt@gmail.com" class="hover:underline flex items-center"><AiOutlineMail class="mr-2 w-4 h-4" />bimbelprivatjkt@gmail.com</a></li>
        </ul>

        <div class="mt-36">
        <ul class="flex items-center gap-4">
          <li><a href="#" class=""><BsInstagram class="mr-2 w-8 h-8" /></a></li>
          <li><a href="#" class=""><FaTiktok class="mr-2 w-8 h-8" /></a></li>
          <li><a href="#" class=""><AiOutlineYoutube class="mr-2 w-8 h-8" /></a></li>
          <li><a href="#" class=""><BsFacebook class="mr-2 w-8 h-8" /></a></li>
          <li><a href="#" class=""><BsLinkedin class="mr-2 w-8 h-8" /></a></li>
        </ul>
      </div>
      </div>

    <!-- Copyright -->
    </div>
      <div className="border-t border-2 border-white mx-8 mb-4"></div>
      <p>&copy; {{ new Date().getFullYear() }} Gatraco Les Privat. All rights reserved.</p>
    </footer>
</template>