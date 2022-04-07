<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import SimpleCards from "../Components/SimpleCards";
import StatsWithBrandIcon from "../Components/StatsWithBrandIcon";
import ProjectList from "../Components/ProjectList";
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <stats-with-brand-icon />
                    <simple-cards />
                    <project-list />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
