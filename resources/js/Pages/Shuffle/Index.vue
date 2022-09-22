<script setup>
    import { Head, Link } from '@inertiajs/inertia-vue3';
    
    defineProps({
        id: String,
    });
    </script>
<template>
    <Head title="Shuffle" />
    <div class="relative min-h-screen bg-gray-900">
        <div class="mx-auto max-w-sm h-screen p-2" style="background-image: url('http://127.0.0.1/images/background.jpg');">
            <h1 class="text-center text-orange-100 font-bold text-4xl">塔羅解惑</h1>
        </div>
    </div>
</template>