require('./bootstrap');


import Alpine from 'alpinejs';

window.Alpine = Alpine;

window.Vue = require('vue').default;

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sendpost', require('./components/SendPost.vue').default);

Alpine.start();

const app = new Vue({
    el: '#app',
});
