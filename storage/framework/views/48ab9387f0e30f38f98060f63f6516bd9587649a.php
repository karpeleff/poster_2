<?php $__env->startSection('content'); ?>
<h4
class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
>
Список обьявлений  в базе
</h4>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
<div class="w-full overflow-x-auto">
  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr
        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
      >
        <th class="px-4 py-3">Логин</th>
        <th class="px-4 py-3">Пароль</th>
        <th class="px-4 py-3">Прокси</th>
        <th class="px-4 py-3">Площадка</th>
        <th class="px-4 py-3">Actions</th>
      </tr>
    </thead>
    <tbody
      class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
    >

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <tr class="text-gray-700 dark:text-gray-400">
       
        <td class="px-4 py-3">
          <p><?php echo e($item->login); ?></p>
        </td>
        <td class="px-4 py-3">
          <p><?php echo e($item->pass); ?></p>
        </td>
        <td class="px-4 py-3">
          <p><?php echo e($item->proxy); ?></p>
        </td>
        <td class="px-4 py-3">
          <p><?php echo e($item->place); ?></p>
        </td>
         
      
        <td class="px-4 py-3">
          <div class="flex items-center space-x-4 text-sm">
       
            <button
              class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
              aria-label="Delete"
            >
          

<a href="/akk_del/<?php echo e($item->id); ?>">
  <svg 
                class="w-5 h-5"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"                
              >            
                <path
                  fill-rule="evenodd"
                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
</a>

           
         
            </button>
          </div>
        </td>
      </tr>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    

   

     

    
    </tbody>
  </table>
</div>
<div
  class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
>
  <span class="flex items-center col-span-3">
    Showing 21-30 of 100
  </span>
  <span class="col-span-2"></span>
  <!-- Pagination -->
  <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
    <nav aria-label="Table navigation">
      <ul class="inline-flex items-center">
        <li>
          <button
            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
            aria-label="Previous"
          >
            <svg
              class="w-4 h-4 fill-current"
              aria-hidden="true"
              viewBox="0 0 20 20"
            >
              <path
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            1
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            2
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            3
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            4
          </button>
        </li>
        <li>
          <span class="px-3 py-1">...</span>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            8
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
          >
            9
          </button>
        </li>
        <li>
          <button
            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
            aria-label="Next"
          >
            <svg
              class="w-4 h-4 fill-current"
              aria-hidden="true"
              viewBox="0 0 20 20"
            >
              <path
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </li>
      </ul>
    </nav>
  </span>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aleksey/PhpstormProjects/poster_2/resources/views/akk_list.blade.php ENDPATH**/ ?>