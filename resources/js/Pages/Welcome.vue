<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Background from '../Layouts/Background.vue';
import witch from '../../assets/witch.png';
import image from '../../assets/tarot-card.png';
</script>

<template>
    <Head title="Tarot" />
    <Background home="true">
        <img :src="witch" class="mt-2">
        <form @submit.prevent="start()" class="absolute top-96 flex flex-col justify-center">
            <button type="submit" ref="startButton"
                class="start-button inset-x-6 origin-center text-center mt-2 text-orange-100 font-bold text-4xl"
                :disabled="form.processing">開始</button>
            <div class="h-64 overflow-y-scroll text-sm w-full text-white">
                <div class="m-2 text-orange-50">
                    <h2 class="text-base mt-2">放鬆</h2>
                    <p>深呼吸一口氣，放鬆一下身體和心靈，協助內心清除雜念及放空自己，完全地靜下心來。如果你在一個嘈雜的環境的話，嘗試轉換到一個寧靜的環境，或是改變一個舒適的姿勢。</p>
                    <h2 class="text-base mt-2">集中精神</h2>
                    <p>開始抽牌前，集中精神想一想你現在需要指引的問題，或是現正困擾你的生活狀況。你的精神愈集中，塔羅牌便能越有效的從你的心裡指引出清晰的道路。</p>
                    <h2 class="text-base mt-2">誠實面對塔羅牌</h2>
                    <p>請誠實接受塔羅牌給你的信息和指引，即使有些信息看來與你的想法大相徑庭，或許，這就是你需要的新角度。我們準備的解釋不一定完美反映你的狀況，卡牌的意思可能會帶給你不同的感覺，請嘗試把信息按你的感覺套用到你的生活中。</p>
                    <h2 class="text-base mt-2">結果不是絕對</h2>
                    <p>塔羅牌的結果不是絕對，塔羅只能協助你看見事情的癥結，並給出一個指引。或者有些卡牌看似十分絕望，但不要害怕，卡牌只是反映最近的狀況，而且卡牌總會有正向的一面。</p>
                    <h2 class="text-base mt-2">不要過份使用塔羅</h2>
                    <p>絕對不要同一天反覆進行占卜，嘗試接受占卜得出的第一個結果吧！不停的占卜並不會為你帶來更清晰的指引，相反地，這樣做將只會令你更感迷惑。</p>
                </div>
            </div>
        </form>
    </Background>
</template>
<script>
import { useForm } from '@inertiajs/inertia-vue3';
let form = useForm();
export default {
    methods: {
        start() {
            this.$refs.startButton.innerHTML = '載入中...';
            form.get('/shuffle', {
                preserveState: false,
            });
        },
    },
    mounted() {
        const card = new Image();
        card.src = image;
    }
}
</script>