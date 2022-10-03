<template>
    <AppLayout title="查看諮詢">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                查看諮詢
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <form class="overflow-hidden bg-white shadow sm:rounded-lg" @submit.prevent="submit(consult.id)">
                        <div class="px-4 py-5 sm:px-6 flex">
                            <div v-for="card in consult.cards"
                                class="w-[250px] h-[515px] text-gray-800 text-center mx-2">
                                <img :src="card.file_name" />
                                {{ card.name }}
                            </div>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class=" font-medium text-gray-500">IP</dt>
                                    <dd class="mt-1  text-gray-900 sm:col-span-2 sm:mt-0">{{ consult.ip }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class=" font-medium text-gray-500">裝置型號</dt>
                                    <dd class="mt-1  text-gray-900 sm:col-span-2 sm:mt-0">{{ consult.device }}</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class=" font-medium text-gray-500">作業系統</dt>
                                    <dd class="mt-1  text-gray-900 sm:col-span-2 sm:mt-0">{{ consult.os }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class=" font-medium text-gray-500">瀏覽器</dt>
                                    <dd class="mt-1  text-gray-900 sm:col-span-2 sm:mt-0">{{ consult.browser }}</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class=" font-medium text-gray-500">諮詢時間</dt>
                                    <dd class="mt-1  text-gray-900 sm:col-span-2 sm:mt-0">{{ consult.created }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class=" font-medium text-gray-500">最後更新於</dt>
                                    <dd class="mt-1  text-gray-900 sm:col-span-2 sm:mt-0">{{ consult.replyed }}</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class=" font-medium text-gray-500">諮詢問題</dt>
                                    <dd class="mt-1  text-gray-900 sm:col-span-2 sm:mt-0">{{ consult.question }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class=" font-medium text-gray-500">老師回覆</dt>
                                    <dd class="mt-1  text-gray-900 sm:col-span-2 sm:mt-0">
                                        <textarea rows="3" v-model="form.reply" v-html="form.reply"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                                    </dd>
                                </div>

                            </dl>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" v-html="'儲存'"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/inertia-vue3';
export default {
    components: {
        AppLayout,
    },
    props: {
        consult: Object,
    },
    setup(props) {
        let form = useForm({
            reply: props.consult.reply
        });
        let submit = (id) => {
            form.post('/dashboard/consult/update/' + id, {
                onSuccess: () => { alert('已儲存') },
                preserveState: false,
                preserveScroll: true,
            });
        }
        
        return { form, submit };
    }
}
</script>