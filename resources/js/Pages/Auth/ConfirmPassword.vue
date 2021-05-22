<template>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <inertia-link :href="'/'">
                <jet-application-mark class="h-auto w-28" />
            </inertia-link>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600">
                This is a secure area of the application. Please confirm your password before continuing.
            </div>

            <jet-validation-errors class="mb-4" />

            <form @submit.prevent="submit">
                <div>
                    <jet-label for="password" value="Password" />
                    <jet-input id="password" type="password" class="block w-full mt-1" v-model="form.password" required autocomplete="current-password" autofocus />
                </div>

                <div class="flex justify-end mt-4">
                    <jet-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Confirm
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

        data() {
            return {
                form: this.$inertia.form({
                    password: '',
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('password.confirm'), {
                    onFinish: () => this.form.reset(),
                })
            }
        }
    }
</script>
