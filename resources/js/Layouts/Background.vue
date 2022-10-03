<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import image from '../../assets/background.png';
</script>

<template>
    <div class="relative bg-gray-900">
        <div class="relative mx-auto max-w-md h-[85vh] overflow-hidden bg-no-repeat"
            :style="{backgroundImage: 'url(' + image +')'}">
            <div class="text-center text-4xl font-extrabold py-4">
                <Link href="/" class="bg-clip-text text-transparent bg-gradient-to-t from-orange-50 to-orange-200 hover:from-orange-200 hover:to-orange-50">
                    塔羅解惑
                </Link>
            </div>
            <slot />
        </div>
    </div>
</template>