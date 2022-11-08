<template>
    <div>
        <notifications></notifications>

    <datetime    type="datetime" v-model="date"></datetime>
<button  v-on:click="alert"  class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg hover:bg-indigo-800">Regular</button>    
    </div>

</template>

<script>
//import Vue from 'vue'
import { Datetime } from 'vue-datetime';
// You need a specific loader for CSS files
import 'vue-datetime/dist/vue-datetime.css';
import { Settings } from 'luxon';
Settings.defaultLocale = 'ru';

//Vue.component('vue-datetime', window.VueDatetime.Datetime);


import Notifications from '@voerro/vue-notifications'

Vue.component('notifications', Notifications);
//https://vuejsexamples.com/easily-display-notifications-to-your-users-built-with-vue/


//Vue.use(Datetime)

Vue.component('datetime',Datetime);



    export default {


data: function () {
    return {
        date: ''
    }
},

methods: {

alert(){
    notify({
    text: 'Could not save the data!',
    theme: 'red'
});
}
  


},


        mounted() {
            console.log('Component mounted.')
        }
    }
</script>