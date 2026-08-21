<script setup lang="ts">
import TopBar from './TopBar.vue'
import Banner from './Banner.vue'
import Navigation from './Navigation.vue'
import LoginBar from '../../Domains/Auth/components/LoginBar.vue';
</script>

<template>

    <div class="header">
        <Banner />
        <TopBar />

        <div class="banner-content">
            <Navigation />
        </div>
        
        <LoginBar />
    </div>


</template>

<style scoped>

    .header {
        position: relative;
        height: 100vh;
        display: grid;
        grid-template-rows: auto 1fr auto;
    }

    .banner-content {
        display: flex;
        align-items: flex-end;
    }

    .header > :not(:first-child) {
        position: relative;
        z-index: 1;
    }

</style>
  



