<template>
    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
        <dt class="text-sm font-medium text-gray-500">{{ name }}</dt>
        <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <span class="flex-grow">{{ value }}</span>
            <span class="ml-4 flex-shrink-0">
                <button type="button" class="bg-white rounded-md font-medium text-purple-600 hover:text-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                    Update
                </button>
            </span>
        </dd>
    </div>
</template>

<script>
export default {
    name: "AdminSettingListItem",
    props: ['name', 'value']
}
</script>

<style scoped>

</style>
