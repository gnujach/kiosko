<script setup>
const emit = defineEmits(["search"]);
import { ref, watch, computed } from "vue";
const search = (e) => {
    emit("search", e.target.value);
};
const inputTramite = ref("");
const showKeyboard = ref(false);
import SimpleKeyboard from "@/Components/SimpleKeyBoard.vue";
import "simple-keyboard/build/css/index.css";
const onChange = (input) => {
    inputTramite.value = input;
};
const onKeyPress = (button) => {};
watch(inputTramite, () => {
    emit("search", inputTramite.value);
});
const showKeyboardListener = () => {
    showKeyboard.value = true;
};
</script>
<template>
    <div class="w-1/2">
        <form class="py-3 px-4 flex items-start w-1/2 lg:w-full">
            <label class="sr-only lg:w-1/2">Buscar</label>
            <div class="relative w-full">
                <input
                    type="text"
                    placeholder="buscar"
                    v-model="inputTramite"
                    size="24"
                    inputmode="text"
                    @focus="showKeyboardListener"
                    class="bg-gray-50 border border-gray-300 text-gray-900 active:border-blue-400 rounded-lg mb-2"
                />
                <SimpleKeyboard
                    v-if="showKeyboard"
                    @onChange="onChange"
                    @onKeyPress="onKeyPress"
                    :input="search"
                />
            </div>
        </form>
    </div>
</template>
