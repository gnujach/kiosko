<script setup lang="ts">
import VueQrcode from "vue-qrcode";
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
<template>

    <Head title="Video Tutorial Certificado de Estudios" />
    <HeaderLayout />
    <div class="max-w-7xl mx-auto p-6 lg:p-8 ">
        <Breadcrumb :items="breadcrumbs" class="w-full mt-2 mb-2" />
        <div class="flex flex-row">
        <video controls width="650" height="400" class="mx-auto" autoplay>
            <source src="/assets/videos/RECUP_CertficadoDeEstudios.mp4" type="video/mp4" />
        </video>
        <vue-qrcode
                value="https://seggtogob-my.sharepoint.com/:v:/g/personal/j_abarca_seg_guanajuato_gob_mx/EYM5AW1AvIJBrk3jLHww-c0BzEg3vEtUUVTJ9jjDIe87AA?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=h7e36p"
                @change="onDataUrlChange" color="{light: '#231243', dark:'#f12fefff'}" scale="6" />
        </div>
    </div>
    <div>

    </div>
</template>



<style scoped></style>