<script setup lang="ts">
import TopBar from './TopBar.vue'
import Banner from './Banner.vue'
import Navigation from './Navigation.vue'
</script>

<template>
    <header class="header">
        <Banner />
        <TopBar />
        <Navigation />
    </header>
</template>

<style scoped>
.header {
    position: relative;
    height: 30rem;
    overflow: hidden;
}

.banner {
    position: absolute;
    inset: 0;
    background: #9195a0;
}
</style>


