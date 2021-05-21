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
                    <markdown-editor v-model="form.body" />
                    <jet-input-error :message="form.errors.body" class="mt-1" />
                </div>
            </div>

            <!-- Right -->
            <div>
                <div class="mb-6">
                    <jet-label class="mb-3" value="Slug:" />
                    <jet-input class="block w-full mt-1 mr-4" v-model="form.slug" :error="form.errors.slug" placeholder="Slug will be generated..." type="text" :class="{ 'opacity-50': form.processing || !formMethod }" :disabled="form.processing || !formMethod"/>
                    <jet-input-error :message="form.errors.slug" class="mt-1" />
                </div>

                <div v-if="formMethod">
                    <delete-post-form :post="post" class="w-full" />
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import { useForm } from '@inertiajs/inertia-vue3'

    import DeletePostForm from '@/Pages/Posts/DeletePostForm'

    import JetButton from '@/Shared/Buttons/Button'
    import JetInput from '@/Shared/FormFields/Input'
    import JetInputError from '@/Shared/InputError'
    import JetLabel from '@/Shared/Label'
    import MarkdownEditor from '@/Shared/FormFields/MarkdownEditor'
    import JetActionMessage from '@/Shared/ActionMessage'

    export default {
        props: ['formMethod', 'formRoute', 'post'],
        
        components: {
            DeletePostForm,
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
                slug: props.post.slug,
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