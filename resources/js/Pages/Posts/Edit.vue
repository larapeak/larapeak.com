<template>
    <app-layout>
        <template #header>
            <h2 class="flex items-center text-xl font-semibold leading-tight text-gray-800">
                <inertia-link class="transition duration-300 hover:text-indigo-400" :href="route('posts.index')">
                    All Posts
                </inertia-link>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
                
                Edit Post
            </h2>
        </template>

        <div class="px-4 py-12 sm:px-0">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <post-form
                    formMethod="put" 
                    :formRoute="'/admin/posts/' + this.post.slug" 
                    :post="this.post" 
                />
            </div>
        </div>
    </app-layout>
</template>

<script>        
    import AppLayout from '@/Layouts/AppLayout'
    import PostForm from '@/pages/Posts/_Form'

    export default {
        props: ['post'],
        
        components: {
            AppLayout,
            PostForm,
        },
    }
</script>