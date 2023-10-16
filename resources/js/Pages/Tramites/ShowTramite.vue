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
            label: "Mostrar",
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
                    class="grid grid-flow-row gap-x-2 gap-y-0 bg-white h-auto m-2 rounded-lg items-start content-between min-h-screen space-y-1"
                >
                    <div
                        class="flex justify-start my-4 items-center col-span-2 mb-0"
                    >
                        <div>
                            <vue-qrcode
                                :value="tramite.data.attributes.url_proceso"
                                @change="onDataUrlChange"
                                color="{light: '#231243', dark:'#f12fefff'}"
                                scale="6"
                            />
                        </div>
                        <h2
                            class="text-3xl font-bold uppercase text-blue-700 mb-2"
                        >
                            {{ tramite.data.attributes.nombre }}
                        </h2>
                    </div>

                    <div
                        class="flex justify-start col-span-2 ml-4 h-8 mt-8 mb-2 content-normal items-center"
                    >
                        <div>
                            <p
                                class="font-semibold text-lg text-blue-900 uppercase italic"
                            >
                                <span class="text-blue-900">Objetivo:</span>
                                {{ tramite.data.attributes.objetivo }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-4 grid-flow-row justify-evenly mx-4 gap-4 col-span-2"
                    >
                        <div
                            class="flex flex-row gap-2 bg-gray-100 rounded-md px-2"
                        >
                            <p class="font-semibold text-lg text-blue-900">
                                Costo:
                            </p>
                            <p class="font-semibold text-lg text-blue-900">
                                ${{ tramite.data.attributes.costo }}
                            </p>
                        </div>
                        <div class="flex flex-row justify-start">
                            <p class="font-semibold text-lg text-blue-900">
                                Tiempo de Respuesta:
                            </p>
                            <p class="font-semibold text-lg text-blue-900">
                                {{ tramite.data.attributes.plazo_respuesta }}
                                (días)
                            </p>
                        </div>
                        <div
                            class="flex flex-row m-1 col-span-2 bg-gray-100 rounded-md"
                        >
                            <p class="font-semibold text-lg text-blue-900">
                                Departamento:
                            </p>
                            <p class="font-semibold text-lg text-blue-900">
                                {{
                                    tramite.data.departamento.data.attributes
                                        .nombre
                                }}
                            </p>
                        </div>
                    </div>
                    <!-- end grid interna 1-->

                    <div
                        class="grid grid-cols-4 grid-flow-row justify-evenly m-4 gap-4 col-span-2 gap-2"
                    >
                        <div class="flex flex-row m-1 gap-2 justify-start">
                            <p class="font-semibold text-lg text-blue-900">
                                Dirigido a Ciudadanos:
                            </p>
                            <p class="font-semibold text-lg text-blue-900">
                                {{ tramite.data.attributes.tipo_usuario }}
                            </p>
                        </div>
                        <div
                            class="flex flex-row m-1 px-2 bg-gray-100 rounded-md"
                        >
                            <p class="font-semibold text-lg text-blue-900">
                                Modalidad:
                            </p>
                            <p class="font-semibold text-lg text-blue-900">
                                {{ tramite.data.attributes.modalidad }}
                            </p>
                        </div>
                        <div class="flex flex-row m-2 px-2 gap-2">
                            <p class="font-semibold text-lg text-blue-900">
                                Qué recibe el ciudadano:
                            </p>
                            <p class="font-semibold text-lg text-blue-900">
                                {{ tramite.data.attributes.ser_recibido }}
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-evenly m-1 col-span-2">
                        <p class="font-semibold text-lg text-blue-900">
                            Requisitos:
                        </p>
                        <ul>
                            <li
                                class="font-semibold text-lg italic lowercase mx-2 my-2"
                                v-for="requisito in tramite.data.requisitos
                                    .requisitos"
                                :key="tramite.data.id"
                            >
                                {{ requisito.data.attributes.nombre }}
                            </li>
                        </ul>
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
