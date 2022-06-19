import {createRouter,createWebHistory} from "vue-router"
import Dashboard from '../view/Dashboard.vue'
import Login from '../view/Login.vue';
import Register from '../view/Register.vue';
import Report from '../view/Report.vue';
import Profile from '../view/Profile.vue';


const routes = [
    {
        path:'/',
        name: 'Dashboard',
        component: Dashboard
    },
    
    {
        path:'/Login',
        name: 'Login',
        component: Login
    },
    
    {
        path:'/Register',
        name: 'Register',
        component: Register
    },

    {
        path:'/Report',
        name: 'Report',
        component: Report
    },

    {
        path:'/Profile',
        name: 'Profile',
        component: Profile
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;