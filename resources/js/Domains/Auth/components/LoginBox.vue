<script setup>
    import { ref } from 'vue'
    import axios from 'axios';

    const email = ref('')
    const password = ref('')
    const remember = ref(false)

    async function login() {
        await axios.get("/sanctum/csrf-cookie");

        await axios.post('/login', {
            email: email.value,
            password: password.value,
        });
    }
</script>

<template>
        <div class="login-box justify-center">
            <span class="bar-label">
                <h5 class="title">
                    Sign In
                </h5>
                <a href="#" class="bar-link">Sign up</a>
            </span>
        
        <input
        v-model="email"
        type="email"
        class="bar-input"
        placeholder="Email"
        />

        <input
        v-model="password"
        type="password"
        class="bar-input"
        placeholder="Password"
        />
        <div class="bottom-row">
        <label class="remember">
            <input type="checkbox" v-model="remember" />
            Remember
        </label>

        <button type="button" class="bar-btn">Log in</button>
        </div>
    </div>
</template>

<style scoped>
    .login-box {
        --scale: 1;
        display: flex;
        flex-direction: column;
        gap: calc(0.5rem * var(--scale));
        background: var(--bg-color-dark);
        border-radius: 0.5rem 0.5rem 0rem 0rem;
        border-top: 2px solid var(--color-yellow);
        padding: calc(1rem * var(--scale));
        width: calc(14rem * var(--scale));
        height: calc(9.5rem * var(--scale));
        position: absolute;
        bottom: 0px;
    }

    .bar-label {
        display: flex;
        justify-content: space-between;
        font-size: calc(var(--font-size-xxs) * var(--scale));
        font-weight: 600;
    }

    h5.title {
        color: var(--font-color-light);
    }

    .bar-input {
        padding: calc(0.4rem * var(--scale)) calc(0.6rem * var(--scale));
        border: 1px solid #0d1a2e;
        background-color: #0b1c40;
        color: var(--font-color-light);
        border-radius: 0.3rem;
        font-size: calc(0.8rem * var(--scale));
        outline: none;
        width: 100%;
        box-sizing: border-box;
        transition: border-color 0.15s ease, box-shadow 0.15s ease;
    }

    .bar-input:focus {
        border-color: #de9f39;
        box-shadow: 0 0 0 0.2rem rgba(194, 125, 22, 0.12);
    }

    .bottom-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: calc(0.15rem * var(--scale));
    }

    .remember {
        display: flex;
        align-items: center;
        gap: 0.3rem;
        font-size: calc(0.8rem * var(--scale));
        color: var(--font-color-medium);
        white-space: nowrap;
        cursor: pointer;
    }

    .remember input[type="checkbox"] {
        accent-color: var(--color-cyan);
    }

    .bar-btn {
        background: var(--color-cyan);
        color: #fff;
        border: none;
        border-radius: 0.3rem;
        padding: calc(0.45rem * var(--scale)) calc(1rem * var(--scale));
        font-size: calc(var(--font-size-xxs) * var(--scale));
        font-weight: 600;
        cursor: pointer;
        white-space: nowrap;
        transition: background 0.15s ease;
    }

    .bar-btn:hover {
        background: #4338ca;
    }

    .bar-link {
        font-size: calc(var(--font-size-xxs) * var(--scale));
        color: var(--font-color-title-light);
        text-decoration: none;
    }

    .bar-link:hover {
        text-decoration: underline;
    }

    @media (min-width: 1600px) {
        .login-box {
            --scale: 1.2;
        }
    }
</style>