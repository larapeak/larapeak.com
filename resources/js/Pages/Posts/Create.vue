<template>
    <app-layout>
        <template #header>
            <h2 class="flex items-center text-xl font-semibold leading-tight text-gray-800">
                <inertia-link class="transition duration-300 hover:text-primary" :href="route('posts.index')">
                    All Posts
                </inertia-link>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
                
                Create New Post
            </h2>
        </template>

        <div class="px-4 py-12 sm:px-0">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <form @submit.prevent="form.post('/admin/posts')">
                    <div class="flex items-center justify-end">                        
                        <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Save
                        </jet-button>
                    </div>

                    <div class="mb-6">
                        <jet-label class="mb-3" value="Title:" />
                        <jet-input class="block w-full mt-1 mr-4" v-model="form.title" :error="form.errors.title" placeholder="Title..." type="text" :class="{ 'opacity-50': form.processing }" :disabled="form.processing" />
                        <jet-input-error :message="form.errors.title" class="mt-1" />
                    </div>
                    
                    <div>
                        <jet-label class="mb-3" value="Body:" />
                        <jet-markdown-editor v-model="form.body" />
                        <jet-input-error :message="form.errors.body" class="mt-1" />
                    </div>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>        
    import { useForm } from '@inertiajs/inertia-vue3'

    import AppLayout from '@/Layouts/AppLayout'

    import JetButton from '@/Shared/Buttons/Button'
    import JetLabel from '@/Shared/FormFields/Label'
    import JetInput from '@/Shared/FormFields/Input'
    import JetInputError from '@/Shared/FormFields/InputError'
    import JetMarkdownEditor from '@/Shared/FormFields/MarkdownEditor'

    export default {
        components: {
            useForm,
            AppLayout,
            JetButton,
            JetLabel,
            JetInput,
            JetInputError,
            JetMarkdownEditor,
        },

        setup() {
            const form = useForm({
                title: null,
                body: null,
            })

            return { form }
        }
    }
</script>