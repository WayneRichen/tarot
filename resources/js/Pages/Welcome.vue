<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Background from '../Layouts/Background.vue';
import witch from '../../assets/witch.png';
</script>

<template>
    <Head title="Tarot" />
    <Background>
        <img :src="witch" class="mt-2">
        <Link :href="route('shuffle.index')" class="start-button absolute top-96 inset-x-6 origin-center text-center text-orange-100 font-bold text-4xl">
            <h1 class="start-button">開始</h1>
        </Link>
    </Background>
</template>