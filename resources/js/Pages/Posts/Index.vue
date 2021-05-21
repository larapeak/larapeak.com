<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                All Posts
            </h2>
        </template>

        <div class="px-4 py-6 sm:py-12 sm:px-0">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-end mb-6">
                    <inertia-link :href="route('posts.create')">
                        <jet-button>
                            New post
                        </jet-button>
                    </inertia-link>
                </div>

                <div class="overflow-x-auto bg-white rounded-md shadow">
                    <data-table :tableData="posts" :tableFields="tableFields" model="posts" :filters="filters" slug />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetButton from '@/Shared/Buttons/Button'
    import DataTable from '@/Shared/DataTables/DataTable'

    export default {
        components: {
            AppLayout,
            JetButton,
            DataTable,
        },

        props: {
            posts: Array,
            filters: Object,
        },

        data() {
            return {
                tableFields: [
                    {
                        id: 'title',
                        name: 'Title',
                        type: 'text',
                    },
                    {
                        id: 'published',
                        name: 'Status',
                        type: 'status',
                    },
                    {
                        id: 'published_at',
                        name: 'Publish Date',
                        type: 'date',
                    }
                ],
            }
        }
    }
</script>
