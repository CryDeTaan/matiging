<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import FinanceMain from "../Components/FinanceMain";
</script>

<template>
    <AppLayout title="Finance">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Finance
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <finance-main />
            </div>
        </div>
    </AppLayout>
</template>
