<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Background from '../../Layouts/Background.vue';

defineProps({
    id: String,
    tarots: Array,
    url: String,
});
</script>
<template>
    <Head title="Shuffle" />
    <Background>
        <div class="" id="selected-cards">
            <div class="selected-cards left top">
                <div class="thecard" id="selected-cards-left" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[0]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[0]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 transition-all duration-700 ease'" id="left-label">{{ tarots[0]['name'] }}</div>
            </div>
            <div class="selected-cards center top">
                <div class="thecard" id="selected-cards-center" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[1]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[1]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 transition-all duration-700 ease'" id="center-label">{{ tarots[1]['name'] }}</div>
            </div>
            <div class="selected-cards right top">
                <div class="thecard" id="selected-cards-right" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[2]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[2]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 transition-all duration-700 ease'" id="right-label">{{ tarots[2]['name'] }}</div>
            </div>
            <div class="fade-in consult absolute top-[45%] w-full flex flex-col justify-center text-center">
                <div class="w-full h-48 bg-slate-900/70 resize-none rounded-md text-white text-lg flex items-center">
                    <div class="mx-auto h-fit leading-loose">
                        已經收到您的諮詢<br>
                        老師會盡快回覆 您可以到<br>
                        <div class="border-indigo-900 border w-fit rounded-md mx-auto">
                            <input class="ml-2 bg-slate-900 pr-2" size="26" v-on:focus="$event.target.select()"
                                ref="myinput" readonly :value=" url " />
                            <button
                                class=" bg-slate-200 rounded-md px-2 text-sm py-2 text-slate-900 hover:bg-slate-100 active:bg-slate-300"
                                @click="copy">{{ copied ? '✔︎已複製' : '複製連結'}}</button>
                        </div>
                        <a :href='url' target="_blank" class="text-orange-100 font-bold underline hover:no-underline active:no-underline">查看老師的解說</a>
                    </div>
                </div>
                <span target="_blank" class="fade-out mt-2 text-orange-100 font-bold text-4xl cursor-default">已送達</span>>
            </div>
        </div>
    </Background>
</template>
<script>
export default {
    data() {
        return {
            copied: false,
        };
    },
    methods: {
        copy() {
            this.$refs.myinput.focus();
            document.execCommand('copy');
            this.copied = true;
        }
    }
}
</script>