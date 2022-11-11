@extends('layouts.app')

@section('content')

<h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Новое обьявление
            </h2>
            <!-- CTA -->
        <form  method="POST" enctype="multipart/form-data   >
<label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Автор</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Телефон</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                />

                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Выбрать город 
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                  <option>$1,000</option>
                  <option>$5,000</option>
                  <option>$10,000</option>
                  <option>$25,000</option>
                </select>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Выбрать категорию
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                  <option>$1,000</option>
                  <option>$5,000</option>
                  <option>$10,000</option>
                  <option>$25,000</option>
                </select>
              </label>

              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Заголовок</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Текст обьявления</span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3"
                  placeholder="Enter some long form content."
                ></textarea>
              </label>
                 <label class="block mt-4 text-sm">
              <div   class="  mt-4   col-md-6">
           
              <span class="text-gray-700 dark:text-gray-400">Выбрать фото</span>
                    <input type="file" name="image" class="form-control">
                </div>
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