<script setup>

import {ref} from "vue";
import {onClickOutside} from '@vueuse/core'

let open = ref(false)

const target = ref(null)

const close = () => open.value = false


onClickOutside(target, close)

</script>

<template>
    <div>
        <button class="text-gray-100 text-lg hover:text-white transition-all w-12 h-12 rounded-full hover:bg-gray-700 border border-white border-opacity-25 active:border-opacity-100"
                @click="open = !open">
            <i class="fa-solid fa-bars text-lg"></i>
        </button>


        <!--    todo elem animálása-->

        <transition name="fade">
            <div v-show="open" class="backdrop-blur-sm bg-black/10 fixed w-full h-full top-0 left-0 z-40 flex justify-end">
                <transition name="slide">
                    <div v-if="open"  ref="target" class="text-white bg-yellow-500 w-80 h-full p-3 lg:p-6">
                        <div class="flex justify-end">
                            <button class="text-gray-100 text-lg hover:text-white transition-all w-12 h-12 rounded-full hover:bg-gray-700 border border-white border-opacity-25 active:border-opacity-100"
                                    @click="close">
                                <i class="fa-solid fa-bars text-lg"></i>
                            </button>

                        </div>

                        <ul class="text-right p-6">
                            <li><a class="p-3 font-semibold inline-block" href="">Rólunk</a></li>
                            <li><a class="p-3 font-semibold inline-block" href="/csapatunk">Csapatunk</a></li>
                            <li><a class="p-3 font-semibold inline-block" href="">Szolgáltaások</a></li>
                            <li><a class="p-3 font-semibold inline-block" href="">Miben segíthetünk</a></li>
                            <li><a class="p-3 font-semibold inline-block" href="">Magazin</a></li>
                            <li><a class="p-3 font-semibold inline-block" href="">Kapcsolat</a></li>
                            <li><a class="p-3 font-semibold inline-block" href="">Időpont</a></li>
                        </ul>
                    </div>
                </transition>
            </div>
        </transition>

    </div>

</template>

<style scoped>
.slide-enter-active, .slide-leave-active {
    transition: transform 0.2s;
}

.slide-enter-from {
    transform: translateX(100%);
}

.slide-leave-to {
    transform: translateX(100%);
}

.fade-enter-active, .fade-leave-active {
    transition: opacity 0.2s;
}
.fade-enter-from, .fade-leave-to {
    opacity: 0;
}
</style>
