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
        <form @submit.prevent="start()">
            <button type="submit" ref="startButton"
                class="start-button absolute top-96 inset-x-6 origin-center text-center mt-2 text-orange-100 font-bold text-4xl"
                :disabled="form.processing">開始</button>
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