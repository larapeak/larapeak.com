<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Create New Post
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center mb-6">
                    <jet-input 
                        v-model="form.title"
                        placeholder="Title..." 
                        type="text" 
                        class="block w-full mt-1" 
                        autofocus 
                    />
                    <jet-button class="ml-4">
                        Save
                    </jet-button>
                </div>
                <markdown-editor v-model="form.body" />
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetButton from '@/Shared/Button'
    import JetInput from '@/Shared/Input'
    import MarkdownEditor from '@/shared/Forms/MarkdownEditor'

    export default {
        components: {
            AppLayout,
            JetButton,
            JetInput,
            MarkdownEditor,
        },

        data() {
            return {
                form: this.$inertia.form({
                    title: '',
                    body: '',
                })
            }
        }
    }
</script>