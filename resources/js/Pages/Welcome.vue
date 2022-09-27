<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Background from '../Layouts/Background.vue';
import witch from '../../assets/witch.png';
import image from '../../assets/tarot-card.png';
</script>

<template>
    <Head title="Tarot" />
    <Background>
        <img :src="witch" class="mt-2">
        <Link :href="route('shuffle.index')"
            class="start-button absolute top-96 inset-x-6 origin-center text-center text-orange-100 font-bold text-4xl"
            v-on:click="clicked"
            disabled>
        <h1 class="start-button">開始</h1>
        </Link>
    </Background>
</template>
<script>
export default {
    methods: {
        clicked(event) {
            event.target.innerText = '載入中...';
        }
    },
    mounted() {
        const card = new Image();
        card.src = image;
    }
}
</script>