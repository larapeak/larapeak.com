<template>      
    <textarea :value="modelValue" />
</template>

<script>
    import SimpleMDE from 'simplemde'

    export default {
        props: ['modelValue'],

        emits: ['update:modelValue'],

        mounted() {            
            var simplemde = new SimpleMDE({
                hideIcons: ["guide"],
                showIcons: ["code"],
                placeholder: "Type here your post...",
                spellChecker: false,
            });

            var self = this

            simplemde.codemirror.on('change', function() {
                self.$emit('update:modelValue', simplemde.value())
            })
        }
    }
</script>

<style>
    @import '~simplemde/dist/simplemde.min.css';
</style>