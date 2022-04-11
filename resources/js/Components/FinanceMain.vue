<template>
    <div class="min-h-full">

        <div class="flex flex-col flex-1">
            <main class="flex-1 pb-8">
                <!-- Page header -->
                <finance-header />

                <div class="mt-8">
                    <!-- Cards -->
                    <finance-cards />

                    <!-- Recent activity -->
                    <finance-activity />

                </div>
            </main>
        </div>
    </div>
</template>

<script>
import FinanceCards from "./FinanceCards";
import FinanceActivity from "./FinanceActivity";
import FinanceHeader from "./FinanceHeader";

export default {
    components: {
        FinanceHeader,
        FinanceActivity,
        FinanceCards,
    },
}
</script>
