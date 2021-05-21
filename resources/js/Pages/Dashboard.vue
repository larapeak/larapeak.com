<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="px-4 py-6 sm:py-12 sm:px-0">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 gap-4 sm:gap-6">
                    <inertia-link :href="route('users.index')" class="relative p-6 overflow-hidden text-white transition duration-300 transform bg-green-500 rounded-md hover:scale-105">
                        <span class="text-5xl font-black">{{ users_count }}</span>
                        <h2 class="text-3xl font-extrabold">User(s)</h2>

                        <div class="absolute -right-12 -top-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-40 text-green-100 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                    </inertia-link>

                    <inertia-link :href="route('posts.index')" class="relative p-6 overflow-hidden text-white transition duration-300 transform bg-blue-500 rounded-md hover:scale-105">
                        <span class="text-5xl font-black">{{ posts_count }}</span>
                        <h2 class="text-3xl font-extrabold">Posts</h2>

                        <div class="absolute -right-12 -top-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-40 text-blue-100 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                    </inertia-link>
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

        props: ['users_count', 'posts_count']
    }
</script>