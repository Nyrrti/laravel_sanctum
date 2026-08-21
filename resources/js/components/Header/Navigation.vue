<script setup lang="ts">

</script>

<template>
    <nav class="grid-container-fluid navbar-gradient">
        <div class="grid-container max-width px-5 d-flex justify-end">
            <router-link :to="{name: 'homepage'}" class="nav">Home</router-link>
            <router-link :to="{name: 'homepage'}" class="nav">Place</router-link>
            <router-link :to="{name: 'homepage'}" class="nav">Holder</router-link>
        </div>
    </nav>
</template>

<style scoped>

    a.nav {
        color: var(--font-color-nav);
        font-size: var(--font-size-lg);
        min-width: 5rem;
        padding: 1rem 1.1rem;
        text-align: center;
    }

    a.nav:hover {
        color: #cbdbff;
    }

    .navbar-gradient {
        background: linear-gradient(
            to top,
            rgba(35, 42, 96, 0.25) 0%,
            rgba(35, 42, 96, 0) 100%
        );
    }

</style>