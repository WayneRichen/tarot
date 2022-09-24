<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Background from '../../Layouts/Background.vue';
import Cards from '../../Components/Cards.vue';
import image from '../../../assets/tarot-card.png';

defineProps({
    id: String,
});
</script>
<template>
    <Head title="Shuffle" />
    <Background>
        <div class="opacity-0" id="selected-cards">
            <div class="selected-cards left">
                <div class="thecard" id="selected-cards-left">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback"></div>
                </div>
            </div>
            <div class="selected-cards center">
                <div class="thecard" id="selected-cards-center">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">現在</div>
                    <div class="theback"></div>
                </div>
            </div>
            <div class="selected-cards right">
                <div class="thecard" id="selected-cards-right">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">未來</div>
                    <div class="theback"></div>
                </div>
            </div>
        </div>
        <div class="fade-in">
            <Cards v-for="n in 33"></Cards>
        </div>
    </Background>
</template>
<script>
export default {
  mounted() {
    let cards = document.querySelectorAll('.cards');
    let click = 0;
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
            rotate += 0.5;
            yAxis += 2;
        });
        await sleep(300);
        let selectedCards = document.getElementById('selected-cards');
        selectedCards.className = 'fade-in';
    }

    const select = async (e) => {
        let card = e.currentTarget
        card.style.transform = 'translate(0%) rotate(0deg)';
        const left = document.getElementById('selected-cards-left');
        const center = document.getElementById('selected-cards-center');
        const right = document.getElementById('selected-cards-right');
        if (click == 0) {
            card.className = 'selected-cards left';
            card.style.top = null;
        } else if (click == 1) {
            card.className = 'selected-cards center';
            card.style.top = null;
        } else {
            card.className = 'selected-cards right';
            card.style.top = null;
        }
        await sleep(350);
        if (click == 0) {
            const leftFront = left.firstChild;
            const leftBack = left.lastChild;
            leftFront.style.backgroundImage = `url('${image}')`;
            leftFront.innerText = '';
            leftBack.style.backgroundImage = `url('https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg')`;
            left.style.transform = 'rotateY(180deg)';
        } else if (click == 1) {
            const centerFront = center.firstChild;
            const centerBack = center.lastChild;
            centerFront.style.backgroundImage = `url('${image}')`;
            centerFront.innerText = '';
            centerBack.style.backgroundImage = `url('https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg')`;
            center.style.transform = 'rotateY(180deg)';
        } else {
            const rightFront = right.firstChild;
            const rightBack = right.lastChild;
            rightFront.style.backgroundImage = `url('${image}')`;
            rightFront.innerText = '';
            rightBack.style.backgroundImage = `url('https://mytarotdiary.files.wordpress.com/2012/09/rws_tarot_20_judgement.jpg')`;
            right.style.transform = 'rotateY(180deg)';
        }
        card.style.display = 'none';
        click++;
    }

    async function sleep(ms = 0) {
        return new Promise(r => setTimeout(r, ms));
    }

    setClasses();
    changePositions();
  }
}
</script>