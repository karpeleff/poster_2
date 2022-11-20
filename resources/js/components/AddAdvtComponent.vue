<template>
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <notifications></notifications>
                    <ul id="example-1">
  <li v-for="item in cities" :key="item.message">
    {{ item.message }}
  </li>
</ul>

                     <button   v-on:click="test"
                  class=" mt-4  px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Larger button
                </button>
                    </div>
                </div>
            </div>
        </div>
  
</template>
<script>

import Notifications from '@voerro/vue-notifications'

Vue.component('notifications', Notifications);



export default {
    mounted() {},
    data() {
            return {
              cities: '',
              file: '',
              success: '',
              listDataString: '',
               listData: [], // placeholder
               cityDataList: []
            };
        },

        props: {
   
  },



        methods: {
test(){


    axios.get('/api/cities', {
    params: {
      //ID: 12345
    }
  })
  .then(function (response) {  
    response => response.json();
   // console.log(response);
  // this.listDataString = JSON.stringify(response.data, null, "\t");
       // this.listData = response.data;
       this.cities = response;
        console.log(this.listData);
        return response;
  }),


    notify({ text: 'Could not save the data!',
    theme: 'red'});

   // alert('test');
}
        }

}
</script>