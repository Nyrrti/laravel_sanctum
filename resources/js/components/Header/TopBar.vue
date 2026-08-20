<script setup lang="ts">

</script>

<template>
    <div class="grid-container-fluid top-bar items-center">
        <div class="grid-container max-width px-5">
            <div class="col-6">
                <h1 class="title-light">
                    Website Title
                </h1>
                <h3 class="sub-title">
                    Sanctum Project
                </h3>  
            </div>
            <div class="col-6 d-flex justify-end items-center">
                <div class="placeholder-block">

                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

.top-bar {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6rem;
    background-color: rgba(35, 42, 96, 0.7);
}

.placeholder-block {
    background-color: var(--color-yellow);
    width: 7rem;
    height: 2.5rem;
}

</style>