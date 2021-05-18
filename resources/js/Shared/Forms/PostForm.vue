<template>
    <form @submit.prevent="submit()">
        <div class="flex items-center justify-end">
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>
            
            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </jet-button>
        </div>

        <div class="mb-6">
            <div>
                <jet-label class="mb-3" value="Title:" />
                <jet-input 
                    class="block w-full mt-1 mr-4"
                    v-model="form.title"
                    :error="form.errors.title"
                    placeholder="Title..." 
                    type="text"
                />
            </div>
            
            <jet-input-error :message="form.errors.title" class="mt-1" />
        </div>
        
        <div>
            <jet-label class="mb-3" value="Body:" />
            <markdown-editor v-model="form.body" />
            <jet-input-error :message="form.errors.body" class="mt-1" />
        </div>
    </form>
</template>

<script>
    import { useForm } from '@inertiajs/inertia-vue3'

    import JetButton from '@/Shared/Buttons/Button'
    import JetInput from '@/Shared/FormFields/Input'
    import JetInputError from '@/Shared/InputError'
    import JetLabel from '@/Shared/Label'
    import MarkdownEditor from '@/Shared/FormFields/MarkdownEditor'
    import JetActionMessage from '@/Shared/ActionMessage'

    export default {
        props: ['formMethod', 'formRoute', 'post'],
        
        components: {
            JetButton,
            JetInput,
            JetInputError,
            JetLabel,
            MarkdownEditor,
            JetActionMessage,
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