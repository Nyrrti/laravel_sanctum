import { createRouter, createWebHistory } from 'vue-router';
import { homeRoutes } from '../routes';

export const router = createRouter({
    history: createWebHistory(),
    routes: [...homeRoutes],
});