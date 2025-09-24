<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const mobileMenuOpen = ref(false);
</script>

<template>
    <div class="sticky top-0 w-full z-50 bg-white/80 backdrop-blur-md">
        <!-- Promo Banner -->
        <div>
            <img src="../../../public/img/diskon/Header.jpg" alt="Header" />
        </div>

        <!-- Header -->
        <nav>
            <div className="container m-auto font-poppins">
                <div className="flex justify-between items-center px-26 border-t border-1 border-gray-200">
                    <div>
                        <a href="" className="gap-2">
                            <img
                                src="../../../public/img/logo/Logotype Gabi.png"
                                alt="GABI les privat"
                                class="w-34 mx-10"
                            />
                        </a>
                    </div>
                    <div className="flex items-center gap-8 mx-10">
                        <ul className="flex gap-8 font-poetsen text-gray-800">
                            <li>
                                <Link
                                    to="/"
                                    className="inline-block p-4 hover:text-gray-600 font-extrabold duration-300"
                                    >Beranda</Link
                                >
                            </li>
                            <li>
                                <Link
                                    to="/"
                                    className="inline-block p-4 hover:text-gray-600 font-extrabold duration-300"
                                    >Promo</Link
                                >
                            </li>
                            <li className="flex items-center">
                                <Link to="/">
                                    <button
                                        className="bg-secondary hover:!bg-yellow-400 py-2 px-3 rounded-md font-extrabold duration-300"
                                    >
                                        Diskon & Trial Hari Ini
                                    </button>
                                </Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>