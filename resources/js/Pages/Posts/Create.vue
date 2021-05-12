<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Create New Post
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <form @submit.prevent="form.post('/admin/posts')">
                    <div class="mb-6">
                        <div class="flex items-center">
                            <jet-input 
                                class="block w-full mt-1 mr-4" 
                                v-model="form.title"
                                placeholder="Title..." 
                                type="text"
                                autofocus 
                            />
                            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Save
                            </jet-button>
                        </div>
                        
                        <jet-input-error :message="form.errors.title" class="mt-1" />
                    </div>
                    
                    <div>
                        <jet-label class="mb-3" value="Blog Post Body:" />
                        <jet-input-error :message="form.errors.body" />
                        <markdown-editor v-model="form.body" />
                    </div>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>    
    import { useForm } from '@inertiajs/inertia-vue3'
    
    import AppLayout from '@/Layouts/AppLayout'
    import JetButton from '@/Shared/Button'
    import JetInput from '@/Shared/Forms/Input'
    import JetInputError from '@/Shared/InputError'
    import JetLabel from '@/Shared/Label'
    import MarkdownEditor from '@/shared/Forms/MarkdownEditor'

    export default {
        components: {
            AppLayout,
            JetButton,
            JetInput,
            JetInputError,
            JetLabel,
            MarkdownEditor,
        },

        setup () {
            const form = useForm({
                title: null,
                body: null,
            })

            return { form }
        },
    }
</script>