import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
// import HelloWorld from './HelloWorld.vue';
import Main from './components/Main.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'Main',
            component: Main
        },
        // {
        //     path: '/login',
        //     name: 'login',
        //     component: Login
        // },
        // {
        //     path: '/blogs',
        //     name: 'blogs',
        //     component: Blogs
        // }
    ]
})

const app = createApp(App);
app.use(router);
app.mount('#app');

