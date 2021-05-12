<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Edit Post
            </h2>
        </template>

        <div class="py-12">
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