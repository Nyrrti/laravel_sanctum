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
                    <p class="xs">
                        Placeholder
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

    .sub-title-group {
        display: flex;
        flex-direction: column;
        gap: 0.12rem
    }

    h1.sub-title {
        line-height: 1.35rem;
        font-size: 1.4rem;
    }

    h3.sub-title {
        font-family: var(--font-family-body);
        color: var(--font-color-medium);
        font-size: 0.95rem;
        font-weight: 500;
        line-height: 0.95rem;
        padding-left: 0.1rem;
    }

    p.xs {
        font-size: 0.9rem;
    }

    .top-bar {
        height: 4.7rem;
        background-color: var(--bg-color-nav);
    }

    .placeholder-block {
        background-color: var(--color-yellow);
        width: 6rem;
        height: 2.3rem;
    }

    .border-block-left {
        border-left: 5px solid var(--color-orange);
    }

    @media (min-width: 1600px) {
        .top-bar {
            height: 6.1rem;
        }

        h1.sub-title {
            line-height: 1.5rem;
            font-size: 1.9rem;
        }

        h3.sub-title {
            font-size: 1.25rem;
            line-height: 1.1rem;
        }
    }
</style>