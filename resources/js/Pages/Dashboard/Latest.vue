<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '../../Components/Pagination.vue';
import ConsultTable from '../../Components/ConsultTable.vue';
defineProps({
    consults: Object,
});
</script>

<template>
    <AppLayout title="最新諮詢">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                最新諮詢
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <ConsultTable :consults=consults />

                </div>
                <Pagination :links="consults.links" />

            </div>
        </div>
    </AppLayout>
</template>