import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../components/Home';
import Brawlers from '../components/Brawlers';
import Brawler from "../components/Brawler";

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
            path: '/brawlers/:category/:brawler', name: 'brawler', component: Brawler
        }
    ]
})

export default router;
