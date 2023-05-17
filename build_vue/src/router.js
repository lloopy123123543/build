
import { createRouter, createWebHistory } from 'vue-router'
import Main from './components/Main.vue'
import Login from './components/Login.vue'
import Work from './components/Work.vue'
import Registration from './components/Registration.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'Main',
            component: Main
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/register',
            name: 'register',
            component: Registration
        },
        {
            path: '/work',
            name: 'work',
            component: Work
        },
    ]
})
export default router;