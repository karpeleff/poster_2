<?php $__env->startSection('content'); ?>


<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
    <p><?php echo e($message); ?></p>
</div>

<?php endif; ?>

<h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Новое обьявление
            </h2>
            <!-- CTA -->
        <form  method="POST" enctype="multipart/form-data" method='<?php echo e(route('advt_store')); ?>'  >
<label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Автор</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                  name="autor"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Телефон</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                  name="tel"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                  name="email"
                />

                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Выбрать город 
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
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
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Выбрать категорию
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="cat"
                >
                  <option>автомобили</option>
                  <option>работа</option>
                  <option>недвижимость</option>
                  <option>животные </option>
                  <option>образование</option>
                </select>
              </label>

              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Заголовок</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder=""
                  name="header"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Текст обьявления</span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3"
                  placeholder="Enter some long form content."
                  name="text"
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
                  type='submit'
                >
                  Send
                </button>
              </div>
              <?php echo csrf_field(); ?>
              </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aleksey/PhpstormProjects/poster_2/resources/views/add_advt.blade.php ENDPATH**/ ?>