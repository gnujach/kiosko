<script setup>
import SearchForm from "@/Components/SearchForm.vue";
import FilterRadio from "@/Components/FilterRadio.vue";
import FilterDropdown from "@/Components/FilterDropdown.vue";
import { Head, Link } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import { DocumentTextIcon } from "@heroicons/vue/24/solid";

const props = defineProps({
    tramites: Object,
    departamentos: Object,
});
const searchFilter = ref("");
const searchDepartamento = ref("");
const handleSearch = (search) => {
    searchDepartamento.value = "1";
    searchFilter.value = search;
};
const handlerFilter = (filter) => {
    searchFilter.value = "";
    searchDepartamento.value = filter;
};
const filteredTramites = computed(() => {
    if (searchFilter.value !== "") {
        return props.tramites.data.filter(
            (tramite) =>
                tramite.data.attributes.nombre.includes(searchFilter.value) ||
                tramite.data.attributes.objetivo.includes(searchFilter.value)
        );
    }
    if (searchDepartamento.value !== "") {
        if (searchDepartamento.value == 1) {
            return props.tramites.data;
        } else
            return props.tramites.data.filter(
                (tramite) =>
                    tramite.data.attributes.departamento_id ==
                    searchDepartamento.value
            );
    }
    return props.tramites.data;
});
</script>
<template>
    <div class="bg-white relative border rounded-lg">
        <div class="flex md:flex-col lg:flex-row items-center justify-between">
            <!-- Search bar-->
            <SearchForm @search="handleSearch" />

            <!-- List departamentos-->
            <FilterDropdown
                :departamentos="departamentos"
                @filterDepartamento="handlerFilter"
            />
        </div>
        <div
            class="grid grid-cols-1 gap-4 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-2 py-2"
            :class="
                filteredTramites.length > 6
                    ? ['overflow-y-scroll', 'h-screen']
                    : 'px-2'
            "
        >
            <div
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500"
                v-for="tramite in filteredTramites"
                :key="tramite.data.id"
            >
                <Link
                    :href="
                        route('tramites/show', {
                            tramite: tramite.data.uuid,
                        })
                    "
                    class="motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500 focus:ring-1"
                >
                    <div class="flex flex-col">
                        <div
                            class="flex justify-center items-center h-10 bg-blue-600 text-white font-semibold focus:outline-blue-500 rounded-t-md"
                        >
                            {{
                                tramite.data.departamento.data.attributes.nombre
                            }}
                        </div>
                        <div
                            class="flex flex-col sm:-mx-4 sm:flex-row justify-evenly mt-2"
                        >
                            <div
                                class="w-16 h-16 bg-blue-50 dark:bg-blue-800/20 flex items-center justify-center rounded-full"
                            >
                                <DocumentTextIcon
                                    class="w-8 h-8 text-blue-500/80"
                                />
                            </div>
                            <div class="mt-4 sm:mx-4 sm:mt-0 w-2/3">
                                <h1
                                    class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-blue-600"
                                >
                                    {{ tramite.data.attributes.nombre }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </Link>
            </div>
        </div>
    </div>
</template>
