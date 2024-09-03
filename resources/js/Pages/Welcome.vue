<script setup>
import { Head, Link } from "@inertiajs/vue3";
import HeaderLayout from "@/Components/Header.vue";
import ConfirmationModal from "@/Components/ConfirmationModal.vue";
import DialogModal from "@/Components/DialogModalIframe.vue";
import DangerButton from "@/Components/DangerButton.vue";
import {
    UserGroupIcon,
    CheckIcon,
    DocumentTextIcon,
    ArrowRightIcon,
    BookOpenIcon,
    BookmarkSquareIcon,
    VideoCameraIcon
} from "@heroicons/vue/24/solid";
import { ref } from "vue";

defineProps({
    // canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
const urlEncuesta = ref(
    "https://encuestas.strc.guanajuato.gob.mx/#/enc/dac2b5bd-4b20-ff88-14bb-b2063669210c/bdec9998-2189-de78-4ee6-adb113a83ced"
);
const urlFormulario = ref(
    "https://forms.office.com/r/4JYzyCTnaY"
);
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
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 my-auto">
                    <Link :href="route('tramites/')"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                    <div class="w-full">
                        <div
                            class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <BookmarkSquareIcon class="w-8 h-8 text-blue-500/80" />
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                            Trámites y Servicios
                        </h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Trámites y servicios que podemos brindarte en
                            este centro de trabajo
                        </p>
                    </div>
                    <div class="flex items-center">
                        <ArrowRightIcon class="h-8 w-8 text-blue-500"></ArrowRightIcon>
                    </div>
                    </Link>

                    <Link :href="route('equipo/')"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                    <div class="w-full">
                        <div
                            class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <UserGroupIcon class="w-8 h-8 text-blue-400"></UserGroupIcon>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                            Equipo de Trabajo
                        </h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Consulta nuestro organigrama y personal que te
                            atiende.
                        </p>
                    </div>

                    <div class="flex items-center">
                        <ArrowRightIcon class="h-8 w-8 text-blue-500"></ArrowRightIcon>
                    </div>
                    </Link>
                    <Link :href="route('tutoriales')"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                    <div class="w-full">
                        <div
                            class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <VideoCameraIcon class="w-8 h-8 text-blue-400"></VideoCameraIcon>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                            Video Tutoriales
                        </h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Consulta nuestros video tutoriales
                        </p>
                    </div>

                    <div class="flex items-center">
                        <ArrowRightIcon class="h-8 w-8 text-blue-500"></ArrowRightIcon>
                    </div>
                    </Link>

                    <button @click="openModal" target="”_blank”"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                        <div class="w-full">
                            <div
                                class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                            </div>
                            <div class="flex flex-row justify-evenly items-top w-full">
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white w-full">
                                    Encuesta de satisfacción
                                </h2>
                                <div class="flex items-center justify-end w-1/2">
                                    <ArrowRightIcon class="h-8 w-8 text-blue-500"></ArrowRightIcon>
                                </div>
                            </div>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Ayudanos a mejorar respondiendo esta rápida
                                encuesta.
                            </p>
                        </div>
                    </button>
                    <button @click="openModalFormulario" href="" target="”_blank”"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                        <div class="w-full">
                            <div
                                class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                            </div>
                            <div class="flex flex-row justify-evenly items-top w-full">
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white w-full">
                                    Formulario de quejas, sugerencias y
                                    felicitaciones
                                </h2>
                                <div class="flex items-center justify-end w-1/2">
                                    <ArrowRightIcon class="h-8 w-8 text-blue-500"></ArrowRightIcon>
                                </div>
                            </div>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                ¿Tienes alguna queja, sugrencia o
                                felicitaciones, sobre el personal, trámite, o
                                instalaciones? aquí puedes hacerlo, la
                                información es anónima.}
                            </p>
                        </div>
                    </button>
                    <Link :href="route('/tramites/triptico')"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                    <div class="w-full">
                        <div
                            class="h-16 w-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                            <BookOpenIcon class="w-8 h-8 text-blue-400"></BookOpenIcon>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                            Tríptico
                        </h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Consulta nuestro tríptico con los trámites de mayor afluencia
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
