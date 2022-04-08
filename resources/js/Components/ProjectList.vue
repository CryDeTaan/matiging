<template>
    <!-- Projects list (only on smallest breakpoint) -->
    <div class="mt-10 sm:hidden">
        <div class="px-4 sm:px-6">
            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Projects</h2>
        </div>
        <ul role="list" class="mt-3 border-t border-gray-200 divide-y divide-gray-100">
            <li v-for="project in projects" :key="project.id">
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                <span class="flex items-center truncate space-x-3">
                  <span :class="[project.bgColorClass, 'w-2.5 h-2.5 flex-shrink-0 rounded-full']" aria-hidden="true"/>
                  <span class="font-medium truncate text-sm leading-6">
                    {{ project.title }}
                    {{ ' ' }}
                    <span class="truncate font-normal text-gray-500">in {{ project.team }}</span>
                  </span>
                </span>
                    <ChevronRightIcon class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500" aria-hidden="true"/>
                </a>
            </li>
        </ul>
    </div>

    <!-- Projects table (small breakpoint and up) -->
    <div class="hidden mt-8 sm:block">
        <div class="align-middle inline-block min-w-full border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                <tr class="border-t border-gray-200">
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <span class="lg:pl-2">Project</span>
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Members
                    </th>
                    <th class="hidden md:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Last updated
                    </th>
                    <th class="pr-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"/>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                <tr v-for="project in projects" :key="project.id">
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div :class="[project.bgColorClass, 'flex-shrink-0 w-2.5 h-2.5 rounded-full']"
                                 aria-hidden="true"/>
                            <a href="#" class="truncate hover:text-gray-600">
                        <span>
                          {{ project.title }}
                          {{ ' ' }}
                          <span class="text-gray-500 font-normal">in {{ project.team }}</span>
                        </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">
                                <img v-for="member in project.members" :key="member.handle"
                                     class="max-w-none h-6 w-6 rounded-full ring-2 ring-white" :src="member.imageUrl"
                                     :alt="member.name"/>
                            </div>
                            <span v-if="project.totalMembers > project.members.length"
                                  class="flex-shrink-0 text-xs leading-5 font-medium">+{{
                                    project.totalMembers - project.members.length
                                }}</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        {{ project.lastUpdated }}
                    </td>
                    <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<script>
import {ref} from 'vue'
import {ClockIcon, HomeIcon, MenuAlt1Icon, ViewListIcon, XIcon} from '@heroicons/vue/outline'
import {ChevronRightIcon, DotsVerticalIcon, SearchIcon, SelectorIcon} from '@heroicons/vue/solid'

const navigation = [
    {name: 'Home', href: '#', icon: HomeIcon, current: true},
    {name: 'My tasks', href: '#', icon: ViewListIcon, current: false},
    {name: 'Recent', href: '#', icon: ClockIcon, current: false},
]
const teams = [
    {name: 'Engineering', href: '#', bgColorClass: 'bg-indigo-500'},
    {name: 'Human Resources', href: '#', bgColorClass: 'bg-green-500'},
    {name: 'Customer Success', href: '#', bgColorClass: 'bg-yellow-500'},
]
const projects = [
    {
        id: 1,
        title: 'GraphQL API',
        initials: 'GA',
        team: 'Engineering',
        members: [
            {
                name: 'Dries Vincent',
                handle: 'driesvincent',
                imageUrl:
                    'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Lindsay Walton',
                handle: 'lindsaywalton',
                imageUrl:
                    'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Courtney Henry',
                handle: 'courtneyhenry',
                imageUrl:
                    'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Tom Cook',
                handle: 'tomcook',
                imageUrl:
                    'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
        ],
        totalMembers: 16,
        lastUpdated: 'May 19, 2022',
        pinned: true,
        bgColorClass: 'bg-pink-600',
    },
    {
        id: 2,
        title: 'Continuous Integration',
        initials: 'CD',
        team: 'DevOps',
        members: [
            {
                name: 'Leonard Krasner',
                handle: 'leonardkrasner',
                imageUrl:
                    'https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Floyd Miles',
                handle: 'floydmiles',
                imageUrl:
                    'https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Emily Selman',
                handle: 'emilyselman',
                imageUrl:
                    'https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Kristin Watson',
                handle: 'kristinwatson',
                imageUrl:
                    'https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
        ],
        totalMembers: 12,
        lastUpdated: 'May 13, 2022',
        pinned: true,
        bgColorClass: 'bg-purple-600',
    },
    {
        id: 3,
        title: 'Stock Launch',
        initials: 'SL',
        team: 'Finance',
        members: [
            {
                name: 'Benjamin Russel',
                handle: 'benjaminrussel',
                imageUrl:
                    'https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Jeffrey Webb',
                handle: 'jeffreywebb',
                imageUrl:
                    'https://images.unsplash.com/photo-1517070208541-6ddc4d3efbcb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Kathryn Murphy',
                handle: 'kathrynmurphy',
                imageUrl:
                    'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Lawrence Hunter',
                handle: 'lawrencehunter',
                imageUrl:
                    'https://images.unsplash.com/photo-1513910367299-bce8d8a0ebf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
        ],
        totalMembers: 16,
        lastUpdated: 'March 04, 2022',
        pinned: true,
        bgColorClass: 'bg-yellow-600',
    },
    {
        id: 4,
        title: 'Serverless Functions',
        initials: 'SF',
        team: 'Engineering',
        members: [
            {
                name: 'Yvette Armstrong',
                handle: 'yvettearmstrong',
                imageUrl:
                    'https://images.unsplash.com/photo-1506980595904-70325b7fdd90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Angela Fisher',
                handle: 'angelafisher',
                imageUrl:
                    'https://images.unsplash.com/photo-1501031170107-cfd33f0cbdcc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Blake Reid',
                handle: 'blakereid',
                imageUrl:
                    'https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
            {
                name: 'Hector Gibbons',
                handle: 'hectorgibbons',
                imageUrl:
                    'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            },
        ],
        totalMembers: 8,
        lastUpdated: 'April 20, 2022',
        pinned: true,
        bgColorClass: 'bg-green-600',
    },
]
const pinnedProjects = projects.filter((project) => project.pinned)

export default {
    components: {
        ChevronRightIcon,
        DotsVerticalIcon,
        MenuAlt1Icon,
        SearchIcon,
        SelectorIcon,
        XIcon,
    },
    setup() {
        const sidebarOpen = ref(false)

        return {
            navigation,
            teams,
            projects,
            pinnedProjects,
            sidebarOpen,
        }
    },
}
</script>
