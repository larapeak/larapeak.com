<template>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <inertia-link :href="'/'">
                <jet-application-mark class="h-auto w-28" />
            </inertia-link>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </div>

            <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
                {{ status }}
            </div>

            <jet-validation-errors class="mb-4" />

            <form @submit.prevent="submit">
                <div>
                    <jet-label for="email" value="Email" />
                    <jet-input id="email" type="email" class="block w-full mt-1" v-model="form.email" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Email Password Reset Link
                    </jet-button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Shared/Buttons/Button'
    import JetInput from '@/Shared/FormFields/Input'
    import JetLabel from '@/Shared/FormFields/Label'
    import JetValidationErrors from '@/Shared/FormFields/ValidationErrors'
    import JetApplicationMark from '@/Shared/Logo/ApplicationMark'

    export default {
        components: {
            JetButton,
            JetInput,
            JetLabel,
            JetValidationErrors,
            JetApplicationMark
        },

        props: {
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: ''
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('password.email'))
            }
        }
    }
</script>
