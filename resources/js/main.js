
import './bootstrap';
import Vue from "vue";
import vuetify from './vuetify';

import Route from './routes/routes';

Vue.config.devtools = true;
Vue.config.performance = true;

import App from './views/App.vue';

const main = new Vue({
    el: '#app',
    vuetify,
    router: Route,
    render: h => h(App)
});

export default main;
