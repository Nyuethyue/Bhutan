import Vue from "vue";
import Router from 'vue-router';
Vue.use(Router)

import home from './components/Home.vue';

const routes = [
    {
        path: '', component: home,
    },
];

export default new Router({
    mode: 'history',
    routes
})