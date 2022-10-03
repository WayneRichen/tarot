<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Background from '../../Layouts/Background.vue';
import Cards from '../../Components/Cards.vue';
import image from '../../../assets/tarot-card.png';

defineProps({
    id: String,
    tarots: Array,
});
</script>
<template>
    <Head title="Shuffle" />
    <Background>
        <div class="opacity-0" id="selected-cards">
            <div class="selected-cards left">
                <div class="thecard" id="selected-cards-left">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[0]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[0]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 opacity-0 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 opacity-0 transition-all duration-700 ease' "
                    id="left-label">{{ tarots[0]['name'] }}</div>
            </div>
            <div class="selected-cards center">
                <div class="thecard" id="selected-cards-center">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">現在</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[1]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[1]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 opacity-0 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 opacity-0 transition-all duration-700 ease' "
                    id="center-label">{{ tarots[1]['name'] }}</div>
            </div>
            <div class="selected-cards right">
                <div class="thecard" id="selected-cards-right">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">未來</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[2]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[2]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 opacity-0 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 opacity-0 transition-all duration-700 ease' "
                    id="right-label">{{ tarots[2]['name'] }}</div>
            </div>
        </div>
        <div class="fade-in">
            <Cards v-for="n in 33"></Cards>
        </div>
        <Link :href="'/consult/' + id" class="opacity-0" id="consult">
        </Link>
    </Background>
</template>
<script>
import { Inertia } from '@inertiajs/inertia';
import { computed } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';
const id = computed(() => usePage().props.value.id);

export default {
    mounted() {
        let cards = document.querySelectorAll('.cards');
        let click = 0;
        let lock = false;
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
            cards.forEach(async (card, index) => {
                card.addEventListener('click', select)
                card.className = 'cards';
                card.style.top = '60%';
                await sleep(300);
                card.style.transform = 'translate(' + xAxis + '%, ' + ((1 / 100) * (yAxis * yAxis)) + '%) rotate(' + rotate + 'deg) scale(0.5)';
                xAxis += 15;
                rotate += 0.5;
                yAxis += 2;
            });
            await sleep(300);
            let selectedCards = document.getElementById('selected-cards');
            selectedCards.className = 'fade-in';
        }

        const select = async (e) => {
            if (lock) return;
            lock = true;
            let card = e.currentTarget
            card.style.transform = 'translate(0%) rotate(0deg)';
            const left = document.getElementById('selected-cards-left');
            const center = document.getElementById('selected-cards-center');
            const right = document.getElementById('selected-cards-right');
            const leftLabel = document.getElementById('left-label');
            const centerLabel = document.getElementById('center-label');
            const rightLabel = document.getElementById('right-label');
            if (click == 0) {
                card.className = 'selecting-cards left';
                card.style.top = null;
            } else if (click == 1) {
                card.className = 'selecting-cards center';
                card.style.top = null;
            } else {
                card.className = 'selecting-cards right';
                card.style.top = null;
            }
            await sleep(700);
            if (click == 0) {
                const leftFront = left.firstChild;
                const leftBack = left.lastChild;
                leftFront.style.backgroundImage = `url('${image}')`;
                leftFront.innerText = '';
                left.style.transform = 'rotateY(180deg)';
                leftLabel.classList.remove('opacity-0');
            } else if (click == 1) {
                const centerFront = center.firstChild;
                const centerBack = center.lastChild;
                centerFront.style.backgroundImage = `url('${image}')`;
                centerFront.innerText = '';
                center.style.transform = 'rotateY(180deg)';
                centerLabel.classList.remove('opacity-0');
            } else {
                const rightFront = right.firstChild;
                const rightBack = right.lastChild;
                rightFront.style.backgroundImage = `url('${image}')`;
                rightFront.innerText = '';
                right.style.transform = 'rotateY(180deg)';
                rightLabel.classList.remove('opacity-0');
            }
            card.style.display = 'none';
            await sleep(700);
            click++;
            if (click == 3) hideCards();
            lock = click == 3 ? true : false;
        }

        async function hideCards() {
            await sleep(700);
            let cards = document.querySelectorAll('.cards');
            cards.forEach(card => {
                card.classList.add('opacity-0');
                card.style.top = '70%';
            });

            const left = document.querySelector('.selected-cards.left');
            const center = document.querySelector('.selected-cards.center');
            const right = document.querySelector('.selected-cards.right');
            left.classList.add('top');
            center.classList.add('top');
            right.classList.add('top');
            await sleep(700);
            Inertia.visit('/consult/' + id.value, { replace: true, preserveState: false });
        }

        async function sleep(ms = 0) {
            return new Promise(r => setTimeout(r, ms));
        }

        setClasses();
        changePositions();
    }
}
</script>