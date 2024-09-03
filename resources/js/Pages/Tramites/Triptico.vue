<script setup>
import ApplicationLogo from "@/Components/ApplicationLogoSeg.vue";
import VueQrcode from "vue-qrcode";
import { Head, Link } from "@inertiajs/vue3";
import { computed } from "vue";
import HeaderLayout from "@/Components/Header.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
const breadcrumbs = computed(() => {
    return [
        {
            label: "Inicio",
            url: route("home"),
        },
        {
            label: "Trámites",
            url: route("tramites/"),
        },
        {
            label: "Triptico",
        },
    ];
});
const props = defineProps({
    tramite: Object,
});
</script>
<template>

    <Head title="Muestra Trámite" />
    <section class="dark:bg-gray-900 bg-dots-darker bg-gray-100 min-h-screen">
        <div class="w-full p-6 lg:p-8">
            <HeaderLayout />
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <Breadcrumb :items="breadcrumbs" class="w-full" />
                <div
                    class="grid grid-flow-row gap-x-2 gap-y-0 bg-white h-auto m-2 rounded-lg items-start content-between min-h-screen space-y-1">
                    <div class="flex justify-start my-4 items-center col-span-2 mb-0">
                        <div>
                            <vue-qrcode
                                value="https://seggtogob-my.sharepoint.com/:b:/g/personal/j_abarca_seg_guanajuato_gob_mx/ETOqvUmXqTVHrChdPho9IeYB0rTxuySbVRI0btnWLZ12fw?e=CrlpV2"
                                @change="onDataUrlChange" color="{light: '#231243', dark:'#f12fefff'}" scale="6" />
                        </div>
                        <h2 class="text-3xl font-bold uppercase text-blue-700 mb-2">
                            Tríptico con trámites de mayor afluencia
                        </h2>
                    </div>

                </div>

            </div>

        </div>
    </section>
</template>
<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
