<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import HeaderLayout from "@/Components/Header.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import VueQrcode from "vue-qrcode";
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
            label: "Constancia de Trabajo",
        },
    ];
});
</script>
<template>

    <Head title="Video Tutorial Constancia de Estudios" />
    <HeaderLayout />
    <div class="max-w-7xl mx-auto p-6 lg:p-8  ">
        <Breadcrumb :items="breadcrumbs" class="w-full mt-2 mb-2" />
        <div class="flex flex-row">
            <video controls width="650" height="400" class="mx-auto" autoplay>
                <source src="/assets/videos/constancia.mp4" type="video/mp4" />
            </video>
            <vue-qrcode
                    value="https://seggtogob-my.sharepoint.com/:v:/g/personal/j_abarca_seg_guanajuato_gob_mx/EZqqZCEzFE5CsDhhcVzqbEABSypGDvkDGLuw8u1bcy5oaw?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=FToaqZ"
                    @change="onDataUrlChange" color="{light: '#231243', dark:'#f12fefff'}" scale="6" />
        </div>

    </div>
    <div>

    </div>
</template>
<style scoped></style>