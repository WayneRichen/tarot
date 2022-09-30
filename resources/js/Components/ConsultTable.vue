<script setup>
import { Link } from '@inertiajs/inertia-vue3';
defineProps({
    consults: Object,
});
</script>
<template>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-left text-gray-500 table-fixed">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6 w-[30%]">
                        抽牌結果
                    </th>
                    <th scope="col" class="py-3 px-6">
                        諮詢
                    </th>
                    <th scope="col" class="py-3 px-6">
                        老師回覆
                    </th>
                    <th scope="col" class="py-3 px-6 w-[10%]">
                        操作
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="consult in consults.data" :key="consult.id" class="bg-white border-b">
                    <th scope="row" class="py-4 px-6 font-medium whitespace-nowrap flex">
                        <div v-for="card in consult.cards" class="w-[97px] h-[200px] text-gray-800 text-center mx-2">
                            <div class="thecard" style="transform: rotateY(180deg)">
                                <div class="theback" :style="{backgroundImage: 'url(' + card.file_name + ')'}"></div>
                            </div>
                            {{ card.name }}
                        </div>
                    </th>
                    <td class="py-4 px-6" v-text="consult.question ? consult.question : '這個人沒有填寫諮詢內容'"
                        :class="consult.question ? 'text-gray-800' : 'text-gray-500'"></td>
                    <td class="py-4 px-6 text-gray-900">
                        {{ consult.reply }}
                    </td>
                    <td class="py-4 px-6">
                        <Link :href="route('dashboard.consult.view', consult.id)" class="mx-1 font-medium text-blue-600 hover:underline">查看</Link>
                        <Link href="#" class="font-medium text-red-600 hover:underline">刪除</Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>