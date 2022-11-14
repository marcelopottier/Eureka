import Home from '../views/Home.vue'
import {createRouter, createWebHistory} from 'vue-router'
const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/about',
            component: () => import('../views/About.vue')
        },
        {
            path: '/clients',
            component: () => import('../views/Clients.vue')
        }
    ]
})

export default router