<template>
  <div class="py-12">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Новое обьявление</h2>

      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
    </div>
    <!-- text - end -->

    <!-- form - start -->
  
      <div>
        <label for="first-name" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Имя автора</label>
        <input   v-model="name"  name="first-name" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
      </div>

      <div>
        <label for="last-name" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Телефон</label>
        <input v-model="tel" name="last-name" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
      </div>

      <div class="sm:col-span-2">
        <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Email*</label>
        <input  v-model="email" name="email" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
      </div>

      <div class="sm:col-span-2">
        <label for="subject" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Заголовок</label>
        <input v-model="header" name="subject" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
      </div>

      <div class="sm:col-span-2">
        <label for="message" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Текст</label>
        <textarea  v-model="text"  name="message" class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
      </div>

      <div class="sm:col-span-2 flex justify-between items-center">

        <button    v-on:click="send"   class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Send</button>

        <span class="text-gray-500 text-sm">*Required</span>
      </div>

      <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-indigo-500 active:text-indigo-600 underline transition duration-100">Privacy Policy</a>.</p>
    
    <!-- form - end -->
  </div>
</div>
    </div>
</template>
<script>

import Notifications from '@voerro/vue-notifications';

Vue.component('notifications', Notifications);


 export default {
    data: function () {
    return {
        name: '',
        tel: '',
        email: '',
        header: '',
        text: ''

    }
},

methods: {


    send(){

        //alert('ggg');
    notify({
    text: 'Could not save the data!',
    theme: 'red'
});
}

}

 }
</script>