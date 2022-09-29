<script setup>
import { Link } from '@inertiajs/inertia-vue3';
defineProps({
    links: Array,
});
</script>
<template>
    <div>
        <component
            :is="link.url ? Link : 'Span'"
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
            class="px-1"
            :class="link.url ? 'text-gray-700 hover:underline' : 'text-gray-500'"
        />
    </div>
</template>