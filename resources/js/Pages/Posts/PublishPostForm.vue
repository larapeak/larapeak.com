<template>
    <jet-secondary-button 
        v-if="!post.published" 
        v-on:click="form.put('/admin/posts/' + this.post.slug + '/publish')"
        :class="{ 'opacity-25': form.processing }" 
        :disabled="form.processing"
        >
        Publish Post
    </jet-secondary-button>
</template>

<script>
    import { useForm } from '@inertiajs/inertia-vue3'

    import JetSecondaryButton from '@/Shared/Buttons/SecondaryButton'

    export default {
        props: ['post'],
        
        components: {
            JetSecondaryButton,
        },

        setup() {
            const form = useForm({
                // 
            })

            return { form }
        }
    }
</script>
