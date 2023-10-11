<script setup>
import ApplicationLogo from "@/Components/ApplicationLogoSeg.vue";
import { Link } from "@inertiajs/vue3";
import LogoMas from "@/Components/LogoMas.vue";
</script>
<template>
    <div class="flex justify-evenly items-center">
        <Link
            :href="route('home')"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500"
        >
            <ApplicationLogo />
        </Link>
        <Link
            :href="route('home')"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500"
        >
            <h2 class="text-2xl font-semibold my-2">
                Módulo de Información USAE San Luis de la Paz
            </h2>
        </Link>
        <Link
            :href="route('home')"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500"
        >
            <LogoMas />
        </Link>
    </div>
</template>
