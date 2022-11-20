require('./bootstrap');


import Alpine from 'alpinejs';

window.Alpine = Alpine;

window.Vue = require('vue').default;

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
axios.defaults.baseURL = 'http://127.0.0.1:8000' // Backend URL for API

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('sendpost', require('./components/SendPost.vue').default);
Vue.component('akk_manager', require('./components/Akk_manager.vue').default);
Vue.component('add_advt', require('./components/AddAdvtComponent.vue').default);
Vue.component('form_upload', require('./components/FormComponent.vue').default);

Alpine.start();

const app = new Vue({
    el: '#app',
});
