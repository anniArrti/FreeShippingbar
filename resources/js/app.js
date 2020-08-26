require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
  
Vue.use(VueRouter);
import Index from './components/Index'
import Edit from './components/Editbar'
import Create from './components/Createbar'
// Vue.component('index', require('./components/Index.vue').default);
// Vue.component('edit', require('./components/Editbar.vue').default);
// Vue.component('creat', require('./components/Createbar.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Index
        },
        {
            path: '/edit',
            name: 'edit',
            component: Edit,
        },
        {
            path: '/create',
            name: 'create',
            component: Create,
        },
    ],
});
const app = new Vue({
    el: '#app',
    router,
});