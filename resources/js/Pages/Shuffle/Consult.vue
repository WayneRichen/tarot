<script setup>
import { Head, useForm } from '@inertiajs/inertia-vue3';
import Background from '../../Layouts/Background.vue';

defineProps({
    id: String,
    tarots: Array,
});
</script>
<template>
    <Head title="Shuffle" />
    <Background>
        <div class="" id="selected-cards">
            <div class="selected-cards left top">
                <div class="thecard" id="selected-cards-left" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[0]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[0]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 transition-all duration-700 ease'"
                    id="left-label">{{ tarots[0]['name'] }}</div>
            </div>
            <div class="selected-cards center top">
                <div class="thecard" id="selected-cards-center" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[1]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[1]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 transition-all duration-700 ease'"
                    id="center-label">{{ tarots[1]['name'] }}</div>
            </div>
            <div class="selected-cards right top">
                <div class="thecard" id="selected-cards-right" style="transform: rotateY(180deg)">
                    <div class="thefront bg-gray-900 text-yellow-50 text-center py-16">過去</div>
                    <div class="theback" :style="{backgroundImage: 'url(' + tarots[2]['file_name'] + ')'}"></div>
                </div>
                <div :class="tarots[2]['name'].length > 5 ? 'pt-2 w-full text-sm text-center text-yellow-50 transition-all duration-700 ease' : 'pt-2 w-full text-center text-yellow-50 transition-all duration-700 ease'"
                    id="right-label">{{ tarots[2]['name'] }}</div>
            </div>
            <form class="fade-in consult absolute top-[45%] w-full flex flex-col justify-center"
                @submit.prevent="submit(id)">
                <textarea class="w-full h-48 bg-slate-900/70 resize-none rounded-md text-white text-lg"
                    style="-webkit-box-shadow: none; -moz-box-shadow: none;" required placeholder="對於這次抽牌結果你想問老師的問題"
                    v-model="form.question"></textarea>
                <div v-if="form.errors.question" v-text="form.errors.question" class="text-purple-200"></div>
                <button type="submit" class="mt-2 text-orange-100 font-bold text-4xl"
                    :disabled="form.processing">諮詢老師</button>
            </form>
        </div>
    </Background>
</template>
<script>
import { useForm } from '@inertiajs/inertia-vue3';
let form = useForm({
    question: ''
});

let submit = (id) => {
    form.post('/consultTeacher/' + id, {
        onSuccess: () => { form.reset() },
        replace: true,
        preserveState: false,
    });
}
</script>