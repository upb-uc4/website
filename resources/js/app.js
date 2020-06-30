require('./bootstrap');

Vue.component('avatar', require('./components/avatar.vue').default);
Vue.component('landing-page', require('./components/landingpage.vue').default);
Vue.component('navbar', require('./components/navbar.vue').default);

Vue.config.devtools = false;
Vue.config.debug = false;
Vue.config.silent = true;

const app = new Vue({
    el: '#app',
});
