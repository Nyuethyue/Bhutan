import Vue from "vue";
import Router from 'vue-router';
Vue.use(Router)

import home from './components/Home.vue';
import report from './components/Report.vue';
import contact from './components/Contact.vue';

const routes = [
    {
        path: '', component: home,
    },
    {
        path: '/report', component: report,
    },
    {
        path: '/contact', component: contact,
    },
];

export default new Router({
    mode: 'history',
    routes
})