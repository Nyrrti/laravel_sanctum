<script setup lang="ts">
    import { onMounted, ref } from "vue";
    import axios from "axios";

    const email = ref("")
    const password = ref("")
    const remember = ref(false)

        type User = {
        name: string;
        email: string;
        is_admin: boolean;
    };

    const user = ref<User | null>(null);

    async function login() {
        try {
            await axios.get("/sanctum/csrf-cookie");

            await axios.post("/login", {
                email: email.value,
                password: password.value,
            });

            await getUser();
            console.log("Login successful");
        } catch (error) {
            console.error("Login failed:", error);
        }
    }

    async function logout() {
        try {
            await axios.post("/api/logout");
            console.log("Logout successful");
            user.value = null;
        } catch (error) {
            console.error("Logout failed:", error);
        }
    }

    async function getUser() {
        try {
            const response = await axios.get("/api/me");

            user.value = response.data;
        } catch (error) {
            if (axios.isAxiosError(error) && error.response?.status === 401) {
                user.value = null;
                return;
            }

            console.error("Could not get user:", error);
        }
    }

    onMounted(() => {
        getUser();
    });

</script>

<template>
    <div class="login-box">

        <template v-if="user === null">
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

                <button type="button" class="bar-btn" @click="login">
                    Log in
                </button>
            </div>
        </template>

        <template v-else>
            <div class="profile-top border-bottom">
                <div class="avatar">{{ user.name.charAt(0).toUpperCase() }}</div>
                <h5 class="title">{{ user.name }}</h5>
                <span v-if="user.is_admin" class="admin-badge">Admin</span>
            </div>

            <p class="email py-2">
                {{ user.email }}
            </p>

            <div class="profile-actions">
                <button type="button" class="bar-btn logout-btn" @click="logout">
                    Log out
                </button>
            </div>
        </template>
    </div>
</template>

<style scoped>
    .login-box {
        --scale: 1;
        display: flex;
        justify-content: start;
        flex-direction: column;
        gap: calc(0.5rem * var(--scale));
        background: var(--bg-color-dark);
        border-radius: 0.5rem 0.5rem 0rem 0rem;
        border-top: 2px solid var(--color-yellow);
        padding: calc(1rem * var(--scale));
        width: calc(14rem * var(--scale));
        height: auto;
        min-height: calc(var(--bar-height) + var(--overlap) * var(--scale));
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
        background: var(--color-yellow);
    }

    .bar-link {
        font-size: calc(var(--font-size-xxs) * var(--scale));
        color: var(--font-color-title-light);
        text-decoration: none;
    }

    .bar-link:hover {
        text-decoration: underline;
    }

    .profile-top {
        display: flex;
        align-items: center;
        gap: calc(0.5rem * var(--scale));
        padding-bottom: calc(0.6rem * var(--scale));
    }

    .profile-top .title {
        font-size: calc(var(--font-size-xxs) * var(--scale));
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        flex: 1;
    }

    .avatar {
        display: flex;
        align-items: center;
        justify-content: center;
        width: calc(2.75rem * var(--scale));
        height: calc(2.75rem * var(--scale));
        min-width: calc(2rem * var(--scale));
        border-radius: 10%;
        background: var(--color-cyan);
        color: #fff;
        font-weight: 700;
        font-size: calc(0.85rem * var(--scale));
    }

    .admin-badge {
        background: var(--color-yellow);
        color: #0b1c40;
        font-size: calc(0.65rem * var(--scale));
        font-weight: 700;
        padding: calc(0.25rem * var(--scale)) calc(0.55rem * var(--scale));
        border-radius: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.03rem;
        white-space: nowrap;
    }

    .email {
        font-size: calc(0.85rem * var(--scale));
        color: var(--font-color-medium);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0;
    }

    .profile-actions {
        margin-top: auto;
        display: flex;
        justify-content: flex-end;
    }

    .logout-btn {
        background: transparent;
        border: 1px solid var(--color-cyan);
        color: var(--color-cyan);
    }

    .logout-btn:hover {
        background: var(--color-cyan);
        color: #fff;
    }

    @media (min-width: 1600px) {
        .login-box {
            --scale: 1.2;
        }
    }
</style>