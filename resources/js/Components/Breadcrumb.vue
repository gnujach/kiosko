<template>
    <div class="flex flex-row ml-8 items-center">
        <span v-for="(item, index) in items" :key="index">
            <Link
                v-if="item.url"
                :href="item.url"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500"
            >
                <span class="text-base flex flex-row"
                    >{{ item.label }}
                    <ChevronRightIcon class="w-6 h-6 text-gray-600" />
                </span>
            </Link>
            <span v-if="!item.url" class="text-base">{{ item.label }}</span>
        </span>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import { ChevronRightIcon } from "@heroicons/vue/24/solid";
const props = defineProps({
    items: {
        type: Array,
        require: true,
    },
});
</script>
