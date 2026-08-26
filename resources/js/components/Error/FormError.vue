<script setup lang="ts">

    const { message } = defineProps<{
        message: string
    }>()

</script>

<template>
    <span v-if="message" class="error">
        {{ message }}
    </span>
</template>

<style scoped>

    .error {
        background-color: darkred;
        color: #fff;
        font-size: 0.8rem;
        line-height: 0.8rem;
        letter-spacing: 0.015rem;
    }

</style>