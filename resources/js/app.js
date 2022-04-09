require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import router from './routes';

Vue.component('pagination', require('laravel-vue-pagination'));

import Swal from 'sweetalert2';
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
  
window.Toast = Toast;

window.Fire = new Vue();

const app = new Vue({
    el: '#app',
    router
});


