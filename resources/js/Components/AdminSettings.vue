<template>
    <div>
        <!-- Content area -->
        <div class="max-w-4xl mx-auto flex flex-col md:px-8 xl:px-0">
            <main class="flex-1">
                <div class="relative max-w-4xl mx-auto md:px-8 xl:px-0">
                    <div class="pt-10 pb-16">
                        <div class="px-4 sm:px-6 md:px-0">
                            <h1 class="text-3xl font-extrabold text-gray-900">Settings</h1>
                        </div>
                        <div class="px-4 sm:px-6 md:px-0">
                            <div class="py-6">
                                <!-- Tabs -->
                                <div class="lg:hidden">
                                    <label for="selected-tab" class="sr-only">Select a tab</label>
                                    <select id="selected-tab" name="selected-tab"
                                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm rounded-md">
                                        <option v-for="tab in tabs" :key="tab.name" :selected="tab.current">
                                            {{ tab.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="hidden lg:block">
                                    <div class="border-b border-gray-200">
                                        <nav class="-mb-px flex space-x-8">
                                            <a v-for="tab in tabs" :key="tab.name" :href="tab.href"
                                               :class="[tab.current ? 'border-purple-500 text-purple-600' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700', 'whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm']">
                                                {{ tab.name }}
                                            </a>
                                        </nav>
                                    </div>
                                </div>

                                <!-- Description list with inline editing -->
                                <div class="mt-10 divide-y divide-gray-200">
                                    <div class="space-y-1">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Application</h3>
                                        <p class="max-w-2xl text-sm text-gray-500">Application and Owner Details</p>
                                    </div>
                                    <div class="mt-6">
                                        <dl class="divide-y divide-gray-200">
                                            <admin-setting-list-item name="Application Name" value="Magtiging" />
                                            <admin-setting-list-item name="Owner" value="Joe Black" />
                                            <admin-setting-list-item name="Email" value="joe.black@magtiging.test" />
                                            <admin-setting-list-item name="Job title" value="DevOps Manager" />
                                            <admin-setting-list-switch label="Automatic timezone" :enabled="true"/>
                                        </dl>
                                    </div>
                                </div>

                                <div class="mt-10 divide-y divide-gray-200">
                                    <div class="space-y-1">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Infrastructure</h3>
                                        <p class="max-w-2xl text-sm text-gray-500">Manage how the infrastructure is managed.</p>
                                    </div>
                                    <div class="mt-6">
                                        <dl class="divide-y divide-gray-200">
                                            <admin-setting-list-item name="Server Name" value="magtiging-prod-01" />
                                            <admin-setting-list-item name="Cloud Provider" value="Azure" />
                                            <admin-setting-list-item name="Date Format" value="DD-MM-YYYY" />
                                            <admin-setting-list-switch label="Auto-update applicant data" :enabled="false"/>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import AdminSettingListItem from "./AdminSettingListItem";
import AdminSettingListSwitch from "./AdminSettingListSwitch";

export default {
    components: {
        AdminSettingListSwitch,
        AdminSettingListItem,
    },
    data() {
        return {
            tabs: [
                {name: 'General', href: '#', current: true},
                {name: 'Password Policies', href: '#', current: false},
                {name: 'Notifications Settings', href: '#', current: false},
                {name: 'Pricing Plans', href: '#', current: false},
                {name: 'Billing', href: '#', current: false},
                {name: 'Team Members', href: '#', current: false},
            ]
        }
    }
}
</script>
