<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { computed } from "vue";
import HeaderLayout from "@/Components/Header.vue";
import ConfirmationModal from "@/Components/ConfirmationModal.vue";
import DialogModal from "@/Components/DialogModalIframe.vue";
import DangerButton from "@/Components/DangerButton.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import {
    UserGroupIcon,
    CheckIcon,
    DocumentTextIcon,
    ArrowRightIcon,
} from "@heroicons/vue/24/solid";
import { ref } from "vue";

const breadcrumbs = computed(() => {
    return [
        {
            label: "Inicio",
            url: route("home"),
        },
        {
            label: "VideoTutoriales",
        },
    ];
});

const confirmingOpen = ref(false);
const closeModal = () => (confirmingOpen.value = false);
const openModal = () => (confirmingOpen.value = true);
const confirmingOpenFormulario = ref(false);
const closeModalFormulario = () => (confirmingOpenFormulario.value = false);
const openModalFormulario = () => (confirmingOpenFormulario.value = true);
</script>

<template>

    <Head title="Bienvenido" />

    <div class="dark:bg-gray-900 bg-dots-darker bg-gray-100 min-h-screen">
        <div class="w-full p-6 lg:p-8">
            <HeaderLayout />
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <Breadcrumb :items="breadcrumbs" class="w-full mt-2 mb-2" />
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 my-auto">
                    <Link :href="route('videos/constancia')"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                    <div class="w-full">
                        <div
                            class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <DocumentTextIcon class="w-8 h-8 text-blue-500/80" />
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                            Constancia de Estudios
                        </h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Conoce como puedes tramitar tu constancia de estudios
                        </p>
                    </div>
                    <div class="flex items-center">
                        <ArrowRightIcon class="h-8 w-8 text-blue-500"></ArrowRightIcon>
                    </div>
                    </Link>
                    <Link :href="route('videos/certificado')"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                    <div class="w-full">
                        <div
                            class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <DocumentTextIcon class="w-8 h-8 text-blue-500/80" />
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                            Certificado de Estudios
                        </h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Conoce como puedes tramitar tu certificado de estudios
                        </p>
                    </div>
                    <div class="flex items-center">
                        <ArrowRightIcon class="h-8 w-8 text-blue-500"></ArrowRightIcon>
                    </div>
                    </Link>
                    <Link :href="route('videos/talones')"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                    <div class="w-full">
                        <div
                            class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <DocumentTextIcon class="w-8 h-8 text-blue-500/80" />
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                            Descargar Comprobante de Pago
                        </h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Conoce como puedes descargar un comprobante de pago
                        </p>
                    </div>
                    <div class="flex items-center">
                        <ArrowRightIcon class="h-8 w-8 text-blue-500"></ArrowRightIcon>
                    </div>
                    </Link>
                    <Link :href="route('videos/certificado')"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                    <div class="w-full">
                        <div
                            class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <DocumentTextIcon class="w-8 h-8 text-blue-500/80" />
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                           Constancia de Servicio
                        </h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Conoce como puedes tramitar tu constancia de servicio
                        </p>
                    </div>
                    <div class="flex items-center">
                        <ArrowRightIcon class="h-8 w-8 text-blue-500"></ArrowRightIcon>
                    </div>
                    </Link>





                </div>
            </div>

            <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4"></div>
                </div>
            </div>
        </div>
    </div>
    <DialogModal :show="confirmingOpen" @close="confirmingOpen = false" :urlIFrame="urlEncuesta">
        <template #title> Responder Encuesta </template>

        <template #content>
            Are you sure you want to delete your account? Once your account is
            deleted, all of its resources and data will be permanently deleted.
        </template>

        <template #footer>
            <DangerButton class="ml-2" @click="closeModal">Cerrar Encuesta
            </DangerButton>
        </template>
    </DialogModal>
    <DialogModal :show="confirmingOpenFormulario" @close="confirmingOpenFormulario = false" :urlIFrame="urlFormulario">
        <template #title> Responder Encuesta </template>

        <template #content>
            Are you sure you want to delete your account? Once your account is
            deleted, all of its resources and data will be permanently deleted.
        </template>

        <template #footer>
            <DangerButton class="ml-2" @click="closeModalFormulario">Cerrar Encuesta
            </DangerButton>
        </template>
    </DialogModal>
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
