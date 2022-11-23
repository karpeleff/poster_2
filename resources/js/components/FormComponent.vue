<template>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class=" mt-6  mb-6  card-header">Новое обьявление</div>
  
            <div class="card-body">
  
              <!-- THIS SECTION IS FOR ERRORS THAT WOULD COME FROM API -->
              <div v-if="errors">
                <div v-for="error in errors" class="alert alert-danger">{{ error }}</div>
              </div>
  
              <!-- FORM WITH v-if WILL BE SHOWN BUT THEN HIDDEN AFTER SUCCESS SUBMIT -->
              <form v-if="showForm">
  
                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Автор</label>
  
                  <div class="col-md-6">
                    <!-- NOTICE v-model="formData.name" - THAT'S HOW IT GETS ATTACHED TO THE FIELD -->
                    <input v-model="formData.autor" id="name" 
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 
                    focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"  name="autor" required autocomplete="name" autofocus>
                  </div>
                </div>
  
                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Телефон</label>
  
                  <div class="col-md-6">
                    <input v-model="formData.tel" id="email" type="email" 
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 
                    focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                     name="tel" required autocomplete="email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
  
                  <div class="col-md-6">
                    <input v-model="formData.email" id="email" type="email"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 
                    focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="email" required autocomplete="email">
                  </div>
                </div>

                <div class="form-group row" mt-4 >
                  <label for="email" class="col-md-4 col-form-label text-md-right">Рекламная площадка </label>
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{board}}</label>
                  <div class="col-md-6">
                    <select      v-model="board"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="subcat"
                >
                  <option value="1" >https://www.lemhira.com</option>
                  <option value="2">https://doska.israelinfo.co.il/</option>
                  <option value="3">https://doska.orbita.co.il/</option>
                  <option value="4">http://www.isra.com/do/</option>
                  <option value="5">https://leboard.ru/il</option>
          
                </select>
                  </div>
                </div>



                 <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Город</label>
  
                  <div class="col-md-6">
                    <select     v-model="formData.sity"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                 
                  name="sity"
                >
                <option v-for="item  in sity"    :key="item.id"  >
                  {{ item.name }}
                  </option>               
                    </select>
                  </div>

                  <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Категория</label>
  
                  <div class="col-md-6">
                    <select      v-model="formData.cat"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="cat"
                >
                  <option v-for="item  in cat"    :key="item.id" >
                    {{ item.name }}
                  </option>
                 
                </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">   под Категория</label>
  
                  <div class="col-md-6">
                    <select      v-model="formData.subcat"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="subcat"
                >
                  <option v-for="item  in subcat"    :key="item.id">
                    {{ item.name }}
                  </option>
                
                </select>
                  </div>
                </div>



                <div class="form-group row">
                  <label for="" class="col-md-4 col-form-label text-md-right">Заголовок</label>
  
                  <div class="col-md-6">
                    <input v-model="formData.header" id="email" type="text" 
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 
                    focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                     name="header" required autocomplete="email">
                  </div>
                </div>

                
  <div class="form-group row">
                  <label for="" class="col-md-4 col-form-label text-md-right">Текст обьявления</label>
  
                  <div class="col-md-6">
                    <textarea   v-model="formData.text"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3"
                  placeholder="Enter some long form content."
                  name="text"
                ></textarea>
                  </div>
                </div>
                </div>
           
                <div class="form-group row">
                  <label class="col-md-4 col-form-label text-md-right">Фото</label>
                  <div class="col-md-6">
                    <div class="custom-file">
                      <!-- MOST IMPORTANT - SEE "ref" AND "@change" PROPERTIES -->
                      <input type="file"  name="image"  class="custom-file-input" id="customFile" 
                          ref="file" @change="handleFileObject()">
                      <label class="custom-file-label text-left" for="customFile">{{ avatarName }}</label>
                    </div>
                  </div>
                </div>
  
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button @click.prevent="submit" type="submit" 
                    class=" mt-4   px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 
                    border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                     style="background: #42b983; border: #42b983;">
                      Отправить
                    </button>
                  </div>
                </div>
              </form>
  
              <!-- THIS IS THE RESULT BLOCK - SHOWING USER DATA IN CASE OF SUCCESS -->
              <div v-if="user">
                <div class="alert alert-success">Обьявление добавлено </div>
                <div>
                  <img height="100px" width="auto" :src="user.avatar_url" alt="">
                </div>
                <div>autor : {{ user.autor }}</div>
                <div>Email : {{ user.email }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  
    import axios from 'axios'
    import _ from 'lodash'
  
    export default {
      data() {
        return {
          formData: {
            autor: null,
            tel: null,
            email: null,
            board: null,
            sity: null,
            cat: null,
            subcat: null,
          },
          board: null,
          avatar: null,
          avatarName: null,
          showForm: true,
          autor: null,
          errors: null,
         user: null,
         userinfo : null,
         sity: [],
         cat: [],
         subcat: []
        }
      },
      methods: {

        getSubCat(){
          axios.get('/api/subcategory/'+this.board)
                     .then((response)=>{
//console.log(response.data);
                      this.subcat = response.data
                     })
        },

        getCat(){
          axios.get('/api/category/'+this.board)
                     .then((response)=>{
//console.log(response.data);
                      this.cat = response.data
                     })
        },

        getSity(){
                axios.get('/api/cities')
                     .then((response)=>{
//console.log(response.data);
                      this.sity = response.data
                     })
            },
            getUserInfo(){
              axios.get('/api/user')
                     .then((response)=>{
//console.log(response.data);
                      this.userinfo = response.data
                     })
            },

        submit() {
          this.errors = null
  
          let formData = new FormData()
        
          formData.append('avatar', this.avatar)
  
          _.each(this.formData, (value, key) => {
            formData.append(key, value)
          })
  
  
        
          axios.post('/api/register', formData, {
              headers: {
                'Content-Type': "multipart/form-data; charset=utf-8; boundary=" + Math.random().toString().substr(2)
              }
            }
          ).then(response => {
         
           // this.showForm = false 
            this.user = response.data
          }).catch(err => {
            if (err.response.status === 422) {
            
              this.errors = []
              _.each(err.response.data.errors, error => {
                _.each(error, e => {
                  this.errors.push(e)
                })
              })
  
            }
          });
        },

        handleFileObject() {
          this.avatar = this.$refs.file.files[0]
          this.avatarName = this.avatar.name
        },
        getCookie(){
         // it gets the cookie called `username`
      const userid = this.$cookies.get("username");
      console.log(userid);
        }
      },
      mounted() {
             
  this.getSity();
  //this.getCookie();
 

 ;
    },
      created() {
          
        },
        watch: {
          board: function(){
            this.formData.board = this.board; 
            //alert(this.formData.board);
            this.getCat();
            this.getSubCat();


          }
        },
        computed: {

        }
      }
   
  </script>