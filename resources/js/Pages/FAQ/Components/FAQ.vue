<script setup>
import { ref } from 'vue';

const openFaq = ref(null);

const faqs = ref([
  {
    question: "Apa bedanya GABI dengan Bimbel Reguler?",
    answer: "GABI lebih fleksibel karena menyesuaikan jadwal dan kebutuhan belajar tiap siswa, sementara bimbel reguler biasanya terikat jadwal kelas."
  },
  {
    question: "Apakah ada kelas online selain tatap muka?",
    answer: "Ada. GABI menyediakan kelas online interaktif yang tetap seru dan mudah dipahami, lengkap dengan materi digital."
  },
  {
    question: "Fasilitas apa aja yang didapat kalau jadi siswa di GABI?",
    answer: "Sebagai siswa di GABI, kamu akan mendapatkan berbagai pilihan les privat secara tatap muka di rumah atau online, modul belajar yang disesuaikan dengan jenjang dan materi sekolah, hingga evaluasi rutin dari guru untuk memantau perkembangan. Selain itu, kamu juga akan mendapatkan laporan belajar secara berkala dan akses ke berbagai referensi tambahan seperti video pembelajaran, worksheet, atau materi interaktif lainnya. Semuanya dirancang agar belajar jadi lebih fleksibel, menyenang- kan, dan tetap fokus pada kebutuhan masing-masing siswa."
  },
  {
    question: "Jadwal lesnya berapa kali dalam seminggu?",
    answer: "Jadwal di GABI fleksibel banget, bisa pilih paket 1 sesi, 2 sesi, atau 3 kali sesi dalam seminggu, tinggal sesuaikan dengan kebutuhan dan waktunya."
  },
  {
    question: "Gimana materi les di GABI, apa beda dengan materi di sekolah?",
    answer: "Materi les di GABI disesuaikan dengan pembelajaran di sekolah, jadi bisa bantu anak lebih paham pelajaran yang sedang dipelajari. Selain itu, guru juga akan kasih referensi tambahan dari media lain biar belajarnya lebih seru dan nggak monoton. Jadi, tetap fokus ke kebutuhan siswa, tapi bisa lebih eksploratif juga."
  },
  {
    question: "Apakah guru berkualitas dan berpengalaman?",
    answer: "Guru-guru GABI bukan cuma jago ilmunya, tapi juga punya pengalaman ngajar yang oke banget. Mereka siap membantu siswa belajar dengan cara yang menyenangkan dan mudah dimengerti. Jadi, belajar di sini makin seru dan hasilnya maksimal."
  },
  {
    question: "Kalau gurunya kurang cocok, gimana?",
    answer: "Kami paham, belajar harus nyaman supaya makin semangat. Kalau siswa merasa kurang cocok sama guru yang sekarang, langsung bilang ke admin. admin siap membantu mencari guru lain yang cocok."
  },
  {
    question: "Berapa lama proses reservasi guru privat?",
    answer: "Biasanya, proses reservasi guru privat di GABI cukup cepat, sekitar 1–3 hari kerja setelah parents mengisi formulir dan melengkapi data. Kalau ada guru yang cocok dan jadwalnya pas, siswa bisa langsung mulai belajar!"
  },
  {
    question: "Gimana cara daftar di GABI?",
    answer: "Mudah banget! Tinggal klik tombol Daftar Sekarang di bawah, isi data singkat, dan tim kami akan segera menghubungi."
  }
]);

const toggleFaq = (index) => {
  openFaq.value = openFaq.value === index ? null : index;
};
</script>
<template>
    <div class="max-w-4xl mx-auto px-4 py-8">
        <div class="space-y-4">
            <!-- FAQ Item -->
            <div v-for="(faq, index) in faqs" :key="index" class="bg-white rounded-2xl shadow-md overflow-hidden">
                <button @click="toggleFaq(index)"
                    class="w-full px-6 py-4 text-left flex justify-between items-start hover:bg-gray-50 transition-colors">
                    <div class="flex-1 pr-4">
                        <h3 class="font-bold text-gray-800 text-base md:text-lg mb-2">
                            {{ faq.question }}
                        </h3>
                        <p v-if="openFaq === index" class="text-gray-600 text-sm md:text-base leading-relaxed">
                            {{ faq.answer }}
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <svg :class="{ 'rotate-180': openFaq === index }"
                            class="w-6 h-6 text-yellow-400 transition-transform duration-300" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
</template>