<template>
    <div>
        <jet-danger-button class="w-full" @click="confirmPostDeletion">
            Delete Post
        </jet-danger-button>

        <!-- Delete Account Confirmation Modal -->
        <jet-dialog-modal :show="confirmingPostDeletion" @close="closeModal">
            <template #title>
                Delete Post
            </template>

            <template #content>
                Are you sure you want to delete this post? Once this post is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete this post.

                <div class="mt-4">
                    <jet-input type="password" class="block w-3/4 mt-1" placeholder="Password"
                                ref="password"
                                v-model="form.password"
                                @keyup.enter="deletePost" />

                    <jet-input-error :message="form.errors.password" class="mt-2" />
                </div>
            </template>

            <template #footer>
                <jet-secondary-button @click="closeModal">
                    Cancel
                </jet-secondary-button>

                <jet-danger-button class="ml-2" @click="deletePost" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Delete Post
                </jet-danger-button>
            </template>
        </jet-dialog-modal>
    </div>
</template>

<script>
    import JetDialogModal from '@/Shared/DialogModal'
    import JetDangerButton from '@/Shared/Buttons/DangerButton'
    import JetInput from '@/Shared/FormFields/Input'
    import JetInputError from '@/Shared/FormFields/InputError'
    import JetSecondaryButton from '@/Shared/Buttons/SecondaryButton'

    export default {
        components: {
            JetDangerButton,
            JetDialogModal,
            JetInput,
            JetInputError,
            JetSecondaryButton,
        },

        props: ['post'],

        data() {
            return {
                confirmingPostDeletion: false,

                form: this.$inertia.form({
                    password: '',
                })
            }
        },

        methods: {
            confirmPostDeletion() {
                this.confirmingPostDeletion = true;

                setTimeout(() => this.$refs.password.focus(), 250)
            },

            deletePost() {
                this.form.delete(route('posts.destroy', this.post.slug), {
                    preserveScroll: true,
                    onSuccess: () => this.closeModal(),
                    onError: () => this.$refs.password.focus(),
                    onFinish: () => this.form.reset(),
                })
            },

            closeModal() {
                this.confirmingPostDeletion = false

                this.form.reset()
            },
        },
    }
</script>
