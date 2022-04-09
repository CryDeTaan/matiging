<template>
    <section aria-labelledby="who-to-follow-heading">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <h2 id="who-to-follow-heading" class="text-base font-medium text-gray-900">Who to follow</h2>
                <div class="mt-6 flow-root">
                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                        <li v-for="user in whoToFollow" :key="user.handle" class="flex items-center py-4 space-x-3">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8 rounded-full" :src="user.imageUrl" alt="" />
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-900">
                                    <a :href="user.href">{{ user.name }}</a>
                                </p>
                                <p class="text-sm text-gray-500">
                                    <a :href="user.href">{{ '@' + user.handle }}</a>
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <button type="button" class="inline-flex items-center px-3 py-0.5 rounded-full bg-indigo-50 text-sm font-medium text-indigo-700 hover:bg-indigo-100">
                                    <PlusSmIcon class="-ml-1 mr-0.5 h-5 w-5 text-indigo-400" aria-hidden="true" />
                                    <span> Follow </span>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mt-6">
                    <a href="#" class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> View all </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import {PlusSmIcon} from '@heroicons/vue/solid'

const whoToFollow = [
    {
        name: 'Leonard Krasner',
        handle: 'leonardkrasner',
        href: '#',
        imageUrl: 'https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
    {
        name: 'Floyd Miles',
        handle: 'floydmiles',
        href: '#',
        imageUrl: 'https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'
    },
    {
        name: 'Emily Selman',
        handle: 'emilyselman',
        href: '#',
        imageUrl: 'https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'
    }
]
export default {
    name: "MessagesToFollow",
    components: {
        PlusSmIcon,
    },
    setup() {
        return {
            whoToFollow,
        }
    },
}

</script>

<style scoped>

</style>
