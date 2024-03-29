import { createRouter, createWebHistory } from 'vue-router';

import AppRegister from '@/components/AppRegister.vue';
import AppLogin from "@/components/AppLogin.vue";
import AppHome from './components/AppHome.vue';
import dashBoard from './components/DashBoard.vue'

const routes = [
    {
        path : '/',
        name : 'Home',
        component : AppHome
    },
    {
        path : '/login',
        name : 'Login',
        component : AppLogin,
        meta:{
            requiresAuth:false
        }
    },
    {
        path : '/register',
        name : 'Register',
        component : AppRegister,
        meta:{
            requiresAuth:false
        }
    },
    {
        path : '/dashboard',
        name : 'Dashboard',
        component : dashBoard,
        meta:{
            requiresAuth:true
        }
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});


router.beforeEach((to)=>{
    if(to.meta.requiresAuth && !localStorage.getItem('token'))
    {
        return {name : 'Login'}
    }
    if(to.meta.requiresAuth === false && localStorage.getItem('token'))
    {
        return {name: 'Dashboard'}
    }
})

export default router;
