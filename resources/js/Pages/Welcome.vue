<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
});
</script>

<template>
    <Head title="Tarot" />
    <div class="relative min-h-screen bg-gray-900">
        <div class="mx-auto max-w-sm h-screen p-2" style="background-image: url('./images/background.jpg');">
            <h1 class="text-center text-orange-100 font-bold text-4xl">塔羅解惑</h1>
            <img src="http://127.0.0.1/images/witch.jpeg" class="mt-2">
            <Link :href="route('shuffle.index')" class="start-button text-center text-orange-100 font-bold text-4xl"><h1 class="start-button">開始</h1></Link>
        </div>
    </div>
</template>
