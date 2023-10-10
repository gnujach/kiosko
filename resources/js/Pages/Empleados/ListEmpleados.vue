<script setup>
import ApplicationLogo from "@/Components/ApplicationLogoSeg.vue";
import { Head, Link } from "@inertiajs/vue3";
import { EnvelopeIcon, DevicePhoneMobileIcon } from "@heroicons/vue/24/solid";
import HeaderLayout from "@/Components/Header.vue";
import { ref, computed } from "vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
const path = new ref("/assets/img/");
const props = defineProps({
    empleados: Object,
});

const breadcrumbs = computed(() => {
    return [
        {
            label: "Inicio",
            url: route("home"),
        },
        {
            label: "Equipo de Trabajo",
        },
    ];
});
</script>
<template>
    <Head title="Equipo de trabajo" />
    <section class="dark:bg-gray-900 bg-dots-darker bg-gray-100 min-h-screen">
        <div class="w-full p-6 lg:p-8">
            <HeaderLayout />
            <div class="max-w-7xl mx-auto">
                <Breadcrumb :items="breadcrumbs" class="w-full mt-2" />
                <div
                    class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-2"
                >
                    <div
                        class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent bg-white"
                        v-for="empleado in empleados.data.empleados"
                        :key="empleado.data.id"
                    >
                        <div class="flex flex-col sm:-mx-4 sm:flex-row">
                            <img
                                class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300"
                                :src="path + empleado.data.attributes.img"
                            />

                            <div class="mt-4 sm:mx-4 sm:mt-0">
                                <h1
                                    class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-white"
                                >
                                    {{ empleado.data.attributes.name }}
                                </h1>

                                <p
                                    class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-white"
                                >
                                    {{ empleado.data.attributes.puesto }}
                                </p>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-2 mt-4">
                            <div class="flex justify-start items-end">
                                <EnvelopeIcon class="w-8 h-8 text-gray-400" />
                            </div>
                            <p
                                class="text-gray-500 dark:text-gray-300 italic text-lg group-hover:text-white col-span-2"
                            >
                                {{ empleado.data.attributes.email }}
                            </p>
                            <div class="flex justify-start items-end">
                                <DevicePhoneMobileIcon
                                    class="w-8 h-8 text-gray-400"
                                />
                            </div>
                            <p
                                class="text-gray-500 dark:text-gray-300 italic text-lg group-hover:text-white col-span-2"
                            >
                                468.688.82.16 ext
                                {{ empleado.data.attributes.ext }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
