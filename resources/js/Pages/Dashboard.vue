<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-x-auto bg-white rounded-md shadow">
                    <table class="w-full whitespace-nowrap">
                        <tr class="font-bold text-left">
                            <th class="px-6 py-4">#</th>
                            <th class="px-6 py-4">Title</th>
                            <th class="px-6 py-4">Status</th>
                        </tr>
                        <tr v-for="post in posts" :key="post.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
                            <td class="border-t">
                                <inertia-link class="flex items-center px-6 py-4" :href="route('dashboard')">
                                    {{ post.id }}
                                </inertia-link>
                            </td>
                            <td class="border-t">
                                <inertia-link class="flex items-center px-6 py-4" :href="route('dashboard')">
                                    {{ post.title }}
                                </inertia-link>
                            </td>
                            <td class="border-t">
                                <inertia-link class="flex items-center px-6 py-4" :href="route('dashboard')">
                                    <div v-if="post.published == 1" class="flex items-center px-2 py-1 text-xs text-green-900 bg-green-200 rounded-full">
                                        <div class="w-2 h-2 mr-1 bg-green-500 rounded-full"></div>
                                        Online
                                    </div>
                                    <div v-if="post.published == 1" class="flex items-center px-2 py-1 text-xs text-yellow-900 bg-yellow-200 rounded-full">
                                        <div class="w-2 h-2 mr-1 bg-yellow-500 rounded-full"></div>
                                        Draft
                                    </div>
                                    <div v-if="post.published == 1" class="flex items-center px-2 py-1 text-xs text-red-900 bg-red-200 rounded-full">
                                        <div class="w-2 h-2 mr-1 bg-red-500 rounded-full"></div>
                                        Deleted
                                    </div>
                                </inertia-link>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
        props: {
            posts: Array,
        },
    }
</script>
