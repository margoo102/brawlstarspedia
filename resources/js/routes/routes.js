import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../components/Home';
import About from '../components/About';
import Brawlers from '../components/Brawlers';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/', name: 'home', component: Home
        },
        {
            path: '/brawlers', name: 'brawlers', component: Brawlers
        },
        {
            path: '/about', name: 'about', component: About
        }

    ]
})

export default router;
