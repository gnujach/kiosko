<script setup>
import BaseListbox from "@/Components/Shared/BaseListbox.vue";
import { ref, watch } from "vue";
const props = defineProps({
    departamentos: {
        type: Array,
        required: true,
    },
});
const departamento = ref(1);
const emit = defineEmits(["filterDepartamento"]);
const filterDepartamento = () => {
    emit("filterDepartamento", departamento.value);
};
watch(departamento, () => {
    emit("filterDepartamento", departamento.value);
});
</script>

<template>
    <div class="py-3 px-4 flex items-center w-1/2 flex-wrap justify-center">
        <p class="m-1 text-lg font-semibold">Departamento</p>
        <BaseListbox
            class="w-full"
            :options="props.departamentos"
            v-model="departamento"
        />
    </div>
</template>
