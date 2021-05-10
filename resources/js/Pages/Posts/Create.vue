<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Create New Post
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-end mb-4">
                    <inertia-link :href="route('posts.create')">
                        <jet-button>
                            New post
                        </jet-button>
                    </inertia-link>
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
            // 
        },

        data() {
            return {
                // 
            }
        }
    }
</script>
