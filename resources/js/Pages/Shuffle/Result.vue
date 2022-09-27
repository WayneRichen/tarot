<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Background from '../../Layouts/Background.vue';

defineProps({
    id: String,
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
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[0] + ')'}"></div>
                </div>
                <div class="pt-2 w-full text-center text-white transition-all duration-700 ease" id="left-label">過去過去
                </div>
            </div>
            <div class="selected-cards center top">
                <div class="thecard" id="selected-cards-center" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[1] + ')'}"></div>
                </div>
                <div class="pt-2 w-full text-center text-white transition-all duration-700 ease" id="center-label">過去過去
                </div>
            </div>
            <div class="selected-cards right top">
                <div class="thecard" id="selected-cards-right" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[1] + ')'}"></div>
                </div>
                <div class="pt-2 w-full text-center text-white transition-all duration-700 ease" id="right-label">過去過去
                </div>
            </div>
            <div class="fade-in consult absolute top-[40%] w-full flex flex-col justify-center">
                <div class="w-full h-48 bg-slate-900 resize-none rounded-md text-white text-lg">
                    <div class="leading-loose m-2 p-2">
                        {{question}}
                    </div>
                    <p class="p-2">老師回覆：</p>
                    <div class="leading-loose border border-white rounded-md m-2 p-2">
                        {{reply}}
                    </div>
                </div>
            </div>
        </div>
    </Background>
</template>
<script>
export default {
    data() {
    },
    methods: {
    }
}
</script>