<script setup>
import Modal from "./Modal.vue";

const emit = defineEmits(["close"]);

defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    maxWidth: {
        type: String,
        default: "2xl",
    },
    closeable: {
        type: Boolean,
        default: false,
    },
    urlIFrame: {
        type: String,
    },
});

const close = () => {
    emit("close");
};
</script>

<template>
    <Modal
        :show="show"
        :max-width="maxWidth"
        :closeable="closeable"
        @close="close"
    >
        <div class="px-6 py-4">
            <div class="text-lg font-medium text-gray-900">
                <slot name="title" />
            </div>

            <div class="mt-4 text-sm text-gray-600">
                <iframe
                    id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="600"
                    height="600"
                    :src="urlIFrame"
                >
                </iframe>
            </div>
        </div>

        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
            <slot name="footer" />
        </div>
    </Modal>
</template>
