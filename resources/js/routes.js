import Vue from 'vue';
import VueRouter from 'vue-router';
import Index from './components/Index.vue';
import Create from './components/Create.vue';
import Update from './components/Update.vue';

Vue.use(VueRouter);
  
const router = new VueRouter({
  	mode: 'history',
  	routes: [
	    {
	        path: '/',
	        name: 'sampah',
	        component: Index,
	        props: true
	    },,
	    {
	        path: '/create',
	        name: 'sampah.create',
	        component: Create,
	        props: true
	    },
	    {
	        path: '/edit/:id',
	        name: 'sampah.edit',
	        component: Update,
	        props: true
	    }
  	]
});

export default router