<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia'
defineProps({
    consults: Object,
});
</script>
<template>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-left text-gray-500 overflow-x-scroll">
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
                    <th scope="col" class="py-3 px-6">
                        諮詢時間
                    </th>
                    <th scope="col" class="py-3 px-6 w-[150px]">
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
                        :class="consult.question ? 'text-gray-700' : 'text-gray-500'"></td>
                    <td class="py-4 px-6 text-gray-700">
                        {{ consult.reply }}
                    </td>
                    <td class="py-4 px-6 text-gray-700">
                        {{ consult.times_ago }}
                    </td>
                    <td class="py-4 px-6 w-[150px]">
                        <Link :href="route('dashboard.consult.view', consult.id)"
                            class="mx-1 font-medium text-blue-600 hover:underline">查看</Link>
                        <button v-on:click="deleteConsult(consult.id)"
                            class="font-medium text-red-600 hover:underline">刪除</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
function deleteConsult(id) {
    if (confirm('確定要刪除嗎？刪除後使用者將看不到抽卡紀錄及老師回覆')) {
        Inertia.delete('/dashboard/consult/delete/' + id, {
            preserveScroll: true,
        });
    }
}
</script>