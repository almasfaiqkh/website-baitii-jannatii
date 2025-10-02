<script setup>
defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    title: String,
    message: String,
});

const emit = defineEmits(['confirm', 'close']);
</script>

<template>
    <teleport to="body">
        <Transition leave-active-class="duration-200">
            <div v-show="show" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" scroll-region>
                <Transition enter-active-class="ease-out duration-300" enter-from-class="opacity-0"
                    enter-to-class="opacity-100" leave-active-class="ease-in duration-200"
                    leave-from-class="opacity-100" leave-to-class="opacity-0">
                    <div v-show="show" class="fixed inset-0 transform transition-all" @click="$emit('close')">
                        <div class="absolute inset-0 bg-gray-500 opacity-75" />
                    </div>
                </Transition>

                <Transition enter-active-class="ease-out duration-300"
                    enter-from-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    enter-to-class="opacity-100 translate-y-0 sm:scale-100" leave-active-class="ease-in duration-200"
                    leave-from-class="opacity-100 translate-y-0 sm:scale-100"
                    leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <div v-show="show"
                        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto sm:max-w-lg">
                        <div class="px-6 py-4">
                            <div class="text-lg font-medium text-gray-900">
                                {{ title || 'Konfirmasi Aksi' }}
                            </div>
                            <div class="mt-4 text-sm text-gray-600">
                                {{ message || 'Apakah Anda yakin? Aksi ini tidak dapat dibatalkan.' }}
                            </div>
                        </div>
                        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right space-x-4">
                            <button @click="$emit('close')" type="button"
                                class="px-4 py-2 rounded-md border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                Batal
                            </button>
                            <button @click="$emit('confirm')" type="button"
                                class="px-4 py-2 rounded-md border border-transparent bg-red-600 text-white hover:bg-red-700">
                                Ya, Lanjutkan
                            </button>
                        </div>
                    </div>
                </Transition>
            </div>
        </Transition>
    </teleport>
</template>