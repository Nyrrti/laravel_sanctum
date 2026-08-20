<script setup lang="ts">

</script>

<template>
    <nav class="grid-container-fluid nav-bar">
        <div class="grid-container max-width px-5 d-flex justify-end">
            <router-link :to="{name: 'homepage'}" class="nav">Home</router-link>
        </div>
    </nav>
</template>

<style scoped>

.nav-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    display: flex;
    align-items: end;
    justify-content: center;
    z-index: 10;
}

a.nav {
    color: var(--font-color-nav);
    min-width: 4.5rem;
    padding: 0.9rem 1.1rem;
    text-align: center;
}

a.nav:hover {
    color: #252e97;
}

</style>