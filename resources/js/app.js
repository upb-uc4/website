require('./bootstrap');

Vue.component('avatar', require('./components/avatar.vue').default);
Vue.component('landing-page', require('./components/landingpage.vue').default);

const app = new Vue({
    el: '#app',
});
