<template>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <inertia-link :href="'/'">
                <jet-application-mark class="h-auto w-28" />
            </inertia-link>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
            </div>

            <div class="mb-4 text-sm font-medium text-green-600" v-if="verificationLinkSent" >
                A new verification link has been sent to the email address you provided during registration.
            </div>

            <form @submit.prevent="submit">
                <div class="flex items-center justify-between mt-4">
                    <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Resend Verification Email
                    </jet-button>

                    <inertia-link :href="route('logout')" method="post" as="button" class="text-sm text-gray-600 underline hover:text-gray-900">Log Out</inertia-link>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Shared/Buttons/Button'
    import JetApplicationMark from '@/Shared/Logo/ApplicationMark'

    export default {
        components: {
            JetButton,
            JetApplicationMark
        },

        props: {
            status: String
        },

        data() {
            return {
                form: this.$inertia.form()
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('verification.send'))
            },
        },

        computed: {
            verificationLinkSent() {
                return this.status === 'verification-link-sent';
            }
        }
    }
</script>
