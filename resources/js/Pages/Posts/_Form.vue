<template>
    <form @submit.prevent="submit()">
        <div class="mb-6">
            <div class="flex items-center">
                <jet-input 
                    class="block w-full mt-1 mr-4" 
                    v-model="form.title"
                    placeholder="Title..." 
                    type="text"
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
</template>

<script>
    import { useForm } from '@inertiajs/inertia-vue3'

    import JetButton from '@/Shared/Button'
    import JetInput from '@/Shared/Forms/Input'
    import JetInputError from '@/Shared/InputError'
    import JetLabel from '@/Shared/Label'
    import MarkdownEditor from '@/shared/Forms/MarkdownEditor'

    export default {
        props: ['formMethod', 'formRoute', 'post'],
        
        components: {
            JetButton,
            JetInput,
            JetInputError,
            JetLabel,
            MarkdownEditor,
        },

        setup (props) {
            const form = useForm({
                title: props.post.title,
                body: props.post.body,
            })

            return { form }
        },

        methods: {
            submit () {
                if (this.formMethod == 'put') {
                    this.form.put(this.formRoute)
                } else {
                    this.form.post(this.formRoute)
                }
            }
        },
    }
</script>