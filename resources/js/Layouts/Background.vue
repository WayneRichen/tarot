<script setup>
import image from '../../assets/background.jpg';
</script>

<template>
    <div class="relative min-h-screen bg-gray-900">
        <div class="relative mx-auto max-w-sm h-screen overflow-hidden" :style="{backgroundImage: 'url(' + image +')'}">
            <h1 class="text-center text-orange-100 font-bold text-4xl py-2">塔羅解惑</h1>
            <slot />
        </div>
    </div>
</template>