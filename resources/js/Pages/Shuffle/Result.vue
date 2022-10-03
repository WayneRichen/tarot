<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Background from '../../Layouts/Background.vue';

defineProps({
    tarots: Array,
    question: String,
    reply: String,
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
                <div :class="tarots[0]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 transition-all duration-700 ease'"
                    id="left-label">{{ tarots[0]['name'] }}</div>
            </div>
            <div class="selected-cards center top">
                <div class="thecard" id="selected-cards-center" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[1]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[1]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 transition-all duration-700 ease'"
                    id="center-label">{{ tarots[1]['name'] }}</div>
            </div>
            <div class="selected-cards right top">
                <div class="thecard" id="selected-cards-right" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[2]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[2]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 transition-all duration-700 ease'"
                    id="right-label">{{ tarots[2]['name'] }}</div>
            </div>
            <div class="fade-in consult absolute top-[45%] w-full flex flex-col justify-center">
                <div class="w-full h-48 bg-slate-900/70 resize-none rounded-md text-white text-lg">
                    <div class="leading-loose m-2 p-2">
                        {{ question }}
                    </div>
                    <p class="pl-4 text-gray-300">老師回覆：</p>
                    <div class="leading-loose border border-gray-300 rounded-md m-2 p-2">
                        {{ reply ? reply : '老師還沒有回覆，請晚點再回來看唷' }}
                    </div>
                </div>
            </div>
        </div>
    </Background>
</template>