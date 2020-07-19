require('./bootstrap');

import Vue from 'vue';
import Vuelidate from 'vuelidate';
import router from './routes.js';
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';

Vue.use(Loading);
Vue.use(Vuelidate);

Vue.component('pagination', require('laravel-vue-bulma-paginator'));

const app = new Vue ({
	el: "#app",
	router
});

export default app;