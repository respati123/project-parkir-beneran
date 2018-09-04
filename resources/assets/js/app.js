
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueRouter from 'vue-router'
import router from './routers/index'
import VueStash from 'vue-stash'
import store from './store'
import axios from 'axios'




window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(VueStash);
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: "#app",
    data: {
      store: store
    },
    router,
});
