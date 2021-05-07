<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Posts
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-end mb-4">
                    <inertia-link href="/test">
                        <jet-button>
                            New post
                        </jet-button>
                    </inertia-link>
                </div>

                <div class="overflow-x-auto bg-white rounded-md shadow">
                    <table class="w-full whitespace-nowrap">
                        <tr class="font-bold text-left">
                            <th v-on:click="sort('id')" class="px-6 py-4">
                                <div class="flex items-center cursor-pointer">
                                    #
                                    <div v-if="field == 'id'" class="ml-2 text-gray-500">
                                        <span v-if="direction == 'asc'">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </span>
                                        <span v-if="direction == 'desc'">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>
                            <th v-on:click="sort('title')" class="px-6 py-4">
                                <div class="flex items-center cursor-pointer">
                                    Title
                                    <div v-if="field == 'title'" class="ml-2 text-gray-500">
                                        <span v-if="direction == 'asc'">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </span>
                                        <span v-if="direction == 'desc'">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>
                            <th v-on:click="sort('published')" class="px-6 py-4">
                                <div class="flex items-center cursor-pointer">
                                    Status
                                    <div v-if="field == 'published'" class="ml-2 text-gray-500">
                                        <span v-if="direction == 'asc'">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </span>
                                        <span v-if="direction == 'desc'">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>
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
                                    <div v-if="post.published == 0" class="flex items-center px-2 py-1 text-xs text-yellow-900 bg-yellow-200 rounded-full">
                                        <div class="w-2 h-2 mr-1 bg-yellow-500 rounded-full"></div>
                                        Draft
                                    </div>
                                    <!-- <div v-if="post.published == 1" class="flex items-center px-2 py-1 text-xs text-red-900 bg-red-200 rounded-full">
                                        <div class="w-2 h-2 mr-1 bg-red-500 rounded-full"></div>
                                        Deleted
                                    </div> -->
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
    import JetButton from '@/Shared/Button'

    export default {
        components: {
            AppLayout,
            JetButton,
        },

        props: {
            posts: Array,
            filters: Object,
        },

        data() {
            return {
                field: this.filters.field,
                direction: this.filters.direction,
            }
        },

        methods: {
            sort(field) {
                this.field = field;
                this.direction = this.direction === 'asc' ? 'desc' : 'asc';

                this.$inertia.get(this.route('dashboard'), { 'field': this.field, 'direction': this.direction });
            }
        },
    }
</script>
