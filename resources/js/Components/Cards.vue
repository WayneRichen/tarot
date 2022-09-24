<script setup>
import image from '../../assets/tarot-card.png';
</script>

<template>
    <div class="cards" id="cards">
        <div class="thecard">
            <div class="thefront" :style="{backgroundImage: 'url(' + image +')'}"></div>
            <div class="theback"></div>
        </div>
    </div>
</template>