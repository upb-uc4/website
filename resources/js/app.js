require('./bootstrap');

Vue.component('avatar', require('./components/avatar.vue').default);

const app = new Vue({
    el: '#app',
});
