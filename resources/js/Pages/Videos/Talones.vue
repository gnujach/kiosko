<template>

    <Head title="Video Tutorial Certificado de Estudios" />
    <HeaderLayout />
    <div class="max-w-7xl mx-auto p-6 lg:p-8 ">
        <Breadcrumb :items="breadcrumbs" class="w-full mt-2 mb-2" />
        <video controls width="650" height="400" class="mx-auto" autoplay>
            <source src="/assets/videos/talones.mp4" type="video/mp4" />
        </video>

    </div>
    <div>

    </div>
</template>

<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import HeaderLayout from "@/Components/Header.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { computed } from "vue";
const breadcrumbs = computed(() => {
    return [
        {
            label: "Inicio",
            url: route("home"),
        },
        {
            label: "VideoTutoriales",
            url: route("tutoriales"),
        },
        {
            label: "Certificado de Estudios",
        },
    ];
});
</script>

<style scoped></style>