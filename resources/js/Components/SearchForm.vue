<script setup>
const emit = defineEmits(["search"]);
const search = (e) => {
    emit("search", e.target.value);
};
</script>
<template>
    <div class="w-1/2">
        <form class="py-3 px-4 flex items-center w-full">
            <label class="sr-only w-1/2">Buscar</label>
            <div class="relative w-full">
                <input
                    type="text"
                    placeholder="buscar"
                    @input="search"
                    size="68"
                    class="bg-gray-50 border border-gray-300 text-gray-900 active:border-blue-400 rounded-lg"
                />
            </div>
        </form>
    </div>
</template>
