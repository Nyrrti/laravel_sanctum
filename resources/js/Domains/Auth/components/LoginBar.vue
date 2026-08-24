<script setup lang="ts">
    import LoginBox from './LoginBox.vue';
</script>

<template>
    <div class="grid-container-fluid bg-bar items-center">
        <div class="grid-container max-width px-4">
            <div class="col-6">
                <h1 class="color">
                    Welcome!
                </h1>
            </div>
            <div class="col-6 d-flex justify-end">
                <LoginBox />
            </div>
        </div>
    </div>
    
</template>

<style>
    .bg-bar {
        background-color: var(--bg-color-nav);
        height: var(--bar-height);
    }

</style>