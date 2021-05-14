<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                All Users
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-end mb-4">
                    <inertia-link :href="route('users.create')">
                        <jet-button>
                            New user
                        </jet-button>
                    </inertia-link>
                </div>

                <div class="overflow-x-auto bg-white rounded-md shadow">
                    <data-table :tableData="users" :tableFields="tableFields" model="users" :filters="filters" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetButton from '@/Shared/Button'
    import DataTable from '@/Shared/Tables/DataTable'

    export default {
        components: {
            AppLayout,
            JetButton,
            DataTable,
        },

        props: {
            users: Array,
            filters: Object,
        },

        data() {
            return {
                tableFields: [
                    {
                        id: 'name',
                        name: 'Name',
                        type: 'text',
                    },
                    {
                        id: 'email',
                        name: 'Email',
                        type: 'text',
                    },
                    {
                        id: 'created_at',
                        name: 'Signup Date',
                        type: 'date',
                    }
                ],
            }
        }
    }
</script>
