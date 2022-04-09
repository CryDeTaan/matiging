<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import MessagesMain from "../Components/MessagesMain";

defineProps(['messages']);

</script>

<template>
    <AppLayout title="My Messages">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Messages
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <messages-main :messages="messages"/>
            </div>
        </div>
    </AppLayout>
</template>
