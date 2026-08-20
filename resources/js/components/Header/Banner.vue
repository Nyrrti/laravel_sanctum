<template>
    <div class="banner text-center">
        <div class="banner-placeholder">
            <h1>Image</h1>

            <svg
                class="placeholder-cross"
                viewBox="0 0 100 100"
                preserveAspectRatio="none"
                aria-hidden="true"
            >
                <line x1="0" y1="0" x2="100" y2="100" />
                <line x1="100" y1="0" x2="0" y2="100" />
            </svg>
        </div>
    </div>
</template>

<style scoped>
.banner {
    position: absolute;
    inset: 0;
}

.banner-placeholder {
    position: absolute;
    inset: 0;

    background: #888c99;
}

.placeholder-cross {
    position: absolute;
    inset: 0;

    width: 100%;
    height: 100%;
}

.placeholder-cross line {
    stroke: #747b83;
    stroke-width: 0.2;
}
</style>
