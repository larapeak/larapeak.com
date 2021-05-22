<template>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <inertia-link :href="'/'">
                <jet-application-mark class="h-auto w-28" />
            </inertia-link>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <jet-validation-errors class="mb-4" />

            <form @submit.prevent="submit">
                <div>
                    <jet-label for="email" value="Email" />
                    <jet-input id="email" type="email" class="block w-full mt-1" v-model="form.email" required autofocus />
                </div>

                <div class="mt-4">
                    <jet-label for="password" value="Password" />
                    <jet-input id="password" type="password" class="block w-full mt-1" v-model="form.password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <jet-label for="password_confirmation" value="Confirm Password" />
                    <jet-input id="password_confirmation" type="password" class="block w-full mt-1" v-model="form.password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Reset Password
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
            email: String,
            token: String,
        },

        data() {
            return {
                form: this.$inertia.form({
                    token: this.token,
                    email: this.email,
                    password: '',
                    password_confirmation: '',
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('password.update'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    }
</script>
