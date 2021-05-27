<template>
    <app-layout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="flex items-center text-xl font-semibold leading-tight text-gray-800">
                    <inertia-link class="transition duration-300 hover:text-primary" :href="route('posts.index')">
                        All Posts
                    </inertia-link>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>

                    {{ post.title }}

                    <div v-if="post.published == 1" class="w-2 h-2 ml-4 mr-1 bg-green-500 rounded-full"></div>
                </h2>

                <div class="flex items-center">
                    <publish-post-form :post="post" class="mr-4" />

                    <jet-secondary-button v-on:click="preview" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        Preview
                    </jet-secondary-button>
                </div>
            </div>
        </template>

        <div class="px-4 py-12 sm:px-0">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <form @submit.prevent="save">
                    <div class="flex items-center justify-end">
                        <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                            Saved.
                        </jet-action-message>
                        
                        <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Save
                        </jet-button>
                    </div>

                    <div class="grid grid-cols-4 gap-4 sm:gap-6">
                        <!-- Left -->
                        <div class="col-span-3">
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
                        </div>

                        <!-- Right -->
                        <div>
                            <div class="mb-6">
                                <jet-label class="mb-3" value="Slug:" />
                                <jet-input class="block w-full mt-1 mr-4" v-model="form.slug" :error="form.errors.slug" placeholder="Slug will be generated..." type="text" :class="{ 'opacity-50': form.processing }" :disabled="form.processing"/>
                                <jet-input-error :message="form.errors.slug" class="mt-1" />
                            </div>

                            <delete-post-form :post="post" class="w-full" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>    
    import { useForm } from '@inertiajs/inertia-vue3'

    import AppLayout from '@/Layouts/AppLayout'

    import PublishPostForm from './PublishPostForm'
    import DeletePostForm from './DeletePostForm'

    import JetButton from '@/Shared/Buttons/Button'
    import JetSecondaryButton from '@/Shared/Buttons/SecondaryButton'
    import JetLabel from '@/Shared/FormFields/Label'
    import JetInput from '@/Shared/FormFields/Input'
    import JetInputError from '@/Shared/FormFields/InputError'
    import JetMarkdownEditor from '@/Shared/FormFields/MarkdownEditor'
    import JetActionMessage from '@/Shared/Messages/ActionMessage'

    export default {
        props: ['post'],
        
        components: {
            useForm,
            AppLayout,
            PublishPostForm,
            DeletePostForm,
            JetButton,
            JetSecondaryButton,
            JetLabel,
            JetInput,
            JetInputError,
            JetMarkdownEditor,
            JetActionMessage,
        },

        setup(props) {
            const form = useForm({
                title: props.post.title,
                body: props.post.body,
                slug: props.post.slug,
            })

            function preview() {
                save()
                
                window.open('/blog/' + props.post.slug, '_BLANK')
                
            }

            function save() {
                form.put('/admin/posts/' + props.post.slug)
            }

            return { form, preview, save }
        }
    }
</script>