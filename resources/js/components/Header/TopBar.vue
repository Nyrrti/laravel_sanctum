<script setup lang="ts">

</script>

<template>
    <div class="grid-container-fluid top-bar items-center">
        <div class="grid-container max-width px-5">
            <div class="col-6 border-block-left sub-title-group ps-1">
                <h1 class="sub-title title-light">
                    Website Title
                </h1>
                <h3 class="sub-title">
                    Sanctum Project
                </h3>  
            </div>
            <div class="col-6 d-flex justify-end items-center">
                <div class="placeholder-block d-flex items-center justify-center">
                    <p class="small">
                        Placeholder
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

    h1.sub-title {
        line-height: 1.15rem;
    }

    .top-bar {
        height: 5.5rem;
        background-color: var(--bg-color-nav);
    }

    .placeholder-block {
        background-color: var(--color-yellow);
        width: 7rem;
        height: 2.5rem;
    }

    @media (min-width: 1600px) {
        .top-bar {
            height: 6.5rem;
        }

        h1.sub-title {
            line-height: 1.5rem;
        }
    }
</style>