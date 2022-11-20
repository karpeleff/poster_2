<template>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Новое обьявление</div>
  
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
                    <input v-model="formData.autor" id="name" type="text" class="form-control" name="autor" required autocomplete="name" autofocus>
                  </div>
                </div>
  
                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Телефон</label>
  
                  <div class="col-md-6">
                    <input v-model="formData.tel" id="email" type="email" class="form-control" name="tel" required autocomplete="email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
  
                  <div class="col-md-6">
                    <input v-model="formData.email" id="email" type="email" class="form-control" name="email" required autocomplete="email">
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">город</label>
  
                  <div class="col-md-6">
                    <select    v-model="formData.sity"
                  class="block w-f  ull mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="sity"
                >
              
                  <option value="0">Все города</option>
                  <option value="185204">Азор</option>
                  <option value="38">Акко</option>
                  <option value="37">Арад</option>
                  <option value="19">Ариэль</option>
                  <option value="40">Афула</option>
                  <option value="21">Ашдод</option>
                  <option value="6">Ашкелон</option>
                  <option value="11">Бат Ям</option>
                  <option value="185019">Бейт Шемеш</option>
                  <option value="17">Беэр Шева</option>
                  <option value="185208">Бней Аиш</option>
                  <option value="752">Бней Брак</option>
                  <option value="34">Герцелия</option>
                  <option value="31">Гиватаим</option>
                  <option value="18">Димона</option>
                  <option value="185186">Ейн Бокек</option>
                  <option value="7">Иерусалим</option>
                  <option value="185007">Йехуд-Моноссон</option>
                  <option value="185018">Йокнеам Илит</option>
                  <option value="185104">Кармиэль</option>
                  <option value="185008">Кацрин</option>
                  <option value="185151">Кирьят Ата</option>
                  <option value="184988">Кирьят Бьялик</option>
                  <option value="39">Кирьят Гат</option>
                  <option value="185217">Кирьят Малахи</option>
                  <option value="185164">Кирьят Моцкин</option>
                  <option value="185021">Кирьят Оно</option>
                  <option value="185114">Кирьят Шмона</option>
                  <option value="185206">Кирьят Экрон</option>
                  <option value="185071">Кирьят Ям</option>
                  <option value="36">Кфар Саба</option>
                  <option value="16">Лод</option>
                  <option value="185218">Маале Адумим</option>
                  <option value="185011">Маалот-Таршиха</option>
                  <option value="185012">Мигдаль аЭмек</option>
                  <option value="9">Модиин</option>
                  <option value="185013">Нагария</option>
                  <option value="3">Натания</option>
                  <option value="32">Нацерет</option>
                  <option value="33">Нацерет Илит</option>
                  <option value="185113">Нес Циона</option>
                  <option value="185057">Нетивот</option>
                  <option value="185169">Нешер</option>
                  <option value="185005">Од аШарон</option>
                  <option value="185049">Ор Акива</option>
                  <option value="20">Ор Йегуда</option>
                  <option value="185009">Офаким</option>
                  <option value="2">Петах Тиква</option>
                   <option value="12">Раанана</option>
                   <option value="30">Рамат Ган</option>
                  <option value="15">Рамле</option>
                  <option value="14">Реховот</option>
                  <option value="13">Ришон ле-Цион</option>
                  <option value="22">Рош Айн</option>
                  <option value="185207">Рош Пина</option>
                  <option value="185134">Сдерот</option>
                    <option value="8">Тверия</option>
                    <option value="1">Тель Авив - Яфо</option>
                    <option value="753">Хадера</option>
                    <option value="4">Хайфа</option>
                    <option value="185214">Хариш</option>
                    <option value="5">Холон</option>
                    <option value="10">Эйлат</option>
                     <option value="185010">Явне</option>
                    </select>
                  </div>

                  <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Категория</label>
  
                  <div class="col-md-6">
                    <select      v-model="formData.cat"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="cat"
                >
                  <option>автомобили</option>
                  <option>работа</option>
                  <option>недвижимость</option>
                  <option>животные </option>
                  <option>образование</option>
                  <option>транспорт</option>
                  <option>знакомства</option>
                  <option>коллекционирование</option>
                  <option>бесплатно</option>
                  <option></option>
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
                  <option>автомобили</option>
                  <option>работа</option>
                  <option>недвижимость</option>
                  <option>животные </option>
                  <option>образование</option>
                  <option>транспорт</option>
                  <option>знакомства</option>
                  <option>коллекционирование</option>
                  <option>бесплатно</option>
                  <option></option>
                </select>
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
                    <button @click.prevent="submit" type="submit" class="btn btn-primary" style="background: #42b983; border: #42b983;">
                      Register
                    </button>
                  </div>
                </div>
              </form>
  
              <!-- THIS IS THE RESULT BLOCK - SHOWING USER DATA IN CASE OF SUCCESS -->
              <div v-if="user">
                <div class="alert alert-success">User created</div>
                <div>
                  <img height="100px" width="auto" :src="user.avatar_url" alt="">
                </div>
                <div>Name : {{ user.name }}</div>
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
            sity: null,
            cat: null,
            subcat: null,
          },
          avatar: null,
          avatarName: null,
          showForm: true,
          user: null,
          errors: null,
        }
      },
      methods: {
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
         
            this.showForm = false 
            this.user = response.data.data
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
        }
      }
  
    }
  
  </script>