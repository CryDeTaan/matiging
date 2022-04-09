<template>
    <section aria-labelledby="trending-heading">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <h2 id="trending-heading" class="text-base font-medium text-gray-900">Trending</h2>
                <div class="mt-6 flow-root">
                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                        <li v-for="post in trendingPosts" :key="post.id" class="flex py-4 space-x-3">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8 rounded-full" :src="post.user.imageUrl" :alt="post.user.name"/>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm text-gray-800">{{ post.body }}</p>
                                <div class="mt-2 flex">
                                    <span class="inline-flex items-center text-sm">
                                      <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                        <ChatAltIcon class="h-5 w-5" aria-hidden="true"/>
                                        <span class="font-medium text-gray-900">{{ post.comments }}</span>
                                      </button>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mt-6">
                    <a href="#"
                       class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        View all </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { ChatAltIcon } from '@heroicons/vue/solid'

const trendingPosts = [
    {
        id: 1,
        user: {
            name: 'Floyd Miles',
            imageUrl:
                'https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        body: 'What books do you have on your bookshelf just to look smarter than you actually are?',
        comments: 291,
    },
    {
        id: 2,
        user: {
            name: 'Emily Selman',
            imageUrl: 'https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        body: 'Have you ever lied about your age to buy a kid\'s meal at a restaurant?',
        comments: 164
    },
    {
        id: 3,
        user: {
            name: '',
            imageUrl: 'https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        body: 'Does Santa Claus pay property taxes for his workshop at the North Pole?',
        comments: 133
    }
]
export default {
    name: "MessagesTrending",
    components: {
        ChatAltIcon,
    },
    setup() {
        return {
            trendingPosts,
        }
    },
}

</script>

<style scoped>

</style>
