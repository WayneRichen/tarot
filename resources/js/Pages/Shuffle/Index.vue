<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Background from '../../Layouts/Background.vue';
import Cards from '../../Components/Cards.vue';

defineProps({
    id: String,
});
</script>
<template>
    <Head title="Shuffle" />
    <Background>
        <div class="fade-in">
            <Cards v-for="n in 33"></Cards>
        </div>
    </Background>
</template>
<script>
export default {
  mounted() {
    let cards = document.querySelectorAll('.cards');
    const setClasses = async () => {
        await sleep(700);
        const classes = ['left', 'active', 'right'];
        cards.forEach((card, index) => card.classList.add(classes[index]));
    }

    const changePositions = async (e) => {
        await sleep(700);
        const card1 = document.querySelector('.cards.left');
        const card2 = document.querySelector('.cards.right');
        const card3 = document.querySelector('.cards.active');
        const left = 'cards left';
        const active = 'cards active';
        const right = 'cards right';
        card1.className = active;
        card3.className = left;
        for (let i = 0; i < 1; i++) {
            await sleep(300);
            card2.className = active;
            card1.className = right;
            await sleep(300);
            card3.className = active;
            card2.className = left;
            await sleep(300);
            card1.className = active;
            card3.className = right;
            await sleep(300);
            card2.className = active;
            card1.className = left;
            await sleep(300);
            card3.className = active;
            card2.className = right;
            await sleep(300);
            card1.className = active;
            card3.className = left;
        }
        cards = document.querySelectorAll('.cards');
        let xAxis = -230;
        let rotate = -7;
        let yAxis = -30;
        cards.forEach( async (card, index) => {
            card.addEventListener('click', select)
            card.className = 'cards';
            card.style.top = '60%';
            await sleep(300);
            card.style.transform = 'translate('+ xAxis +'%, ' + ((1/100) * (yAxis * yAxis)) + '%) rotate(' + rotate + 'deg) scale(0.5)';
            xAxis += 15;
            rotate+=0.5;
            yAxis+=2;
        });  
    }

    const select = async (e) => {
        let card = e.currentTarget
        card.style.transform = 'translate(0%) rotate(0deg)';
        card.style.top = '20%';
        let thecard = card.querySelector('.thecard');
        await sleep(500);
        thecard.style.transform = 'rotateY(180deg)';
    }

    async function sleep(ms = 0) {
        return new Promise(r => setTimeout(r, ms));
    }

    setClasses();
    changePositions();
  }
}
</script>