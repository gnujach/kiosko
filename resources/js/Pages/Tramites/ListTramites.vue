<script setup>
import ApplicationLogo from "@/Components/ApplicationLogoSeg.vue";
import DataTable from "@/Components/DataTable.vue";
import { Head, Link } from "@inertiajs/vue3";
import { EnvelopeIcon, DevicePhoneMobileIcon } from "@heroicons/vue/24/solid";
import { ref, computed } from "vue";

const props = defineProps({
    tramites: Object,
    departamentos: Object,
});
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
        },
    ];
});
</script>
<template>
    <Head title="Tramites" />
    <section class="dark:bg-gray-900 bg-dots-darker bg-gray-100 min-h-screen">
        <div class="w-full p-6 lg:p-8">
            <HeaderLayout />
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <Breadcrumb :items="breadcrumbs" class="w-full" />
                <DataTable
                    :tramites="tramites"
                    :departamentos="departamentos"
                />
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
