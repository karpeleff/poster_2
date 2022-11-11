@extends('layouts.app')

@section('content')

<h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Менеджер аккаунтов и площадок 
            </h2>
            <!-- CTA -->
        <form  method="POST" enctype="multipart/form-data  action=""  >
<label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Логин</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Пароль </span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Прокси сервер</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                />

                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Рекламная площадка
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                  <option>lemhira.com</option>
                  <option>https://leboard.ru/il</option>
                  <option>https://doska.israelinfo.co.il/:</option>
                  <option>https://doska.orbita.co.il/</option>
                  <option>http://www.isra.com/do/</option>
                  <option>https://leboard.ru/il</option>
                </select>
              </label>

           

              <div>
                <button
                  class=" mt-4   px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Send
                </button>
              </div>
              </form>
@endsection