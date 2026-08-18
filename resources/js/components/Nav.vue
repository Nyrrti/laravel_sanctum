<script setup lang="ts">

</script>

<template>
    <nav class="grid-container-fluid nav-bg">
        <div class="grid-container max-width">
            <router-link :to="{name: 'homepage'}" class="nav">Home</router-link>
        </div>
    </nav>
</template>

<style>

.nav-bg {
    height: 5.5rem;
    background-color: var(--bg-color-nav);
    display: flex;
    align-items: center;
}

a.nav {
    color: var(--font-color-nav);
}

a.nav:hover {
    color: #8d97ff;
}

</style>