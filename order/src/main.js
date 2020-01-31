import Vue from 'vue'
import App from './App.vue'
import router from './router'
// import store from './store'
import store from './store/index'
import './assets/js/common.js';
import JQuery from 'jquery'
window.$ = window.JQuery = JQuery

import 'popper.js'
import 'bootstrap'

import 'simplebar-vue';
import 'simplebar/dist/simplebar.min.css';

import 'normalize.css'
import './assets/app.scss'

Vue.config.productionTip = false

new Vue({
  store,
  router,
  render: h => h(App),
}).$mount('#app')

