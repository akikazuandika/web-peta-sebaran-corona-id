require('./bootstrap');
const axios = require('axios')
const VueAxios = require('vue-axios')

window.Vue = require('vue');

Vue.use(VueAxios, axios)

Vue.component('home', require('./components/Home.vue').default);

const app = new Vue({
    el: '#app',
});
