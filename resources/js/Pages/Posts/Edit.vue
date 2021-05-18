<template>
    <app-layout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="flex items-center text-xl font-semibold leading-tight text-gray-800">
                    <inertia-link class="transition duration-300 hover:text-indigo-400" :href="route('posts.index')">
                        All Posts
                    </inertia-link>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                    
                    Edit Post
                </h2>

                <div v-if="post.published == 1" class="flex items-center px-2 py-1 text-xs text-green-900 bg-green-200 rounded-full w-min">
                    <div class="w-2 h-2 mr-1 bg-green-500 rounded-full"></div>
                    Published
                </div>

                <jet-secondary-button v-if="post.published == 0" @click="publish" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-auto mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                    Publish
                </jet-secondary-button>
            </div>
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
    import PostForm from '@/Shared/Forms/PostForm'
    import JetSecondaryButton from '@/Shared/SecondaryButton'

    export default {
        props: ['post'],
        
        components: {
            AppLayout,
            PostForm,
            JetSecondaryButton,
        },

        data() {
            return {
                form: this.$inertia.form(),
            }
        },

        methods: {
            publish () {
                this.form.put('/admin/posts/' + this.post.slug + '/publish')
            }
        },
    }
</script>