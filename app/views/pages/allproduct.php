<?php
require APPROOT . '/views/inc/header.php';
?>




<div class="grid grid-flow-row grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-10 pt-20 xl:ml-10 font-sans font-medium text-base pb-24">

    <!-- <?php foreach ($data['products'] as $product) : ?> -->

    <div class="w-80 bg-white shadow rounded xl:ml-0 ml-7">
        <div class="h-48 w-full flex flex-col justify-between p-4 bg-cover bg-center" style="background-image: url('<?php echo URLROOT . '/images/upload/' . $product->image; ?>');width: 330px; 
       height: 250px; 
      ; 
       ">

            <div> <span class="uppercase text-xs bg-green-50 p-0.5 border-green-500 border rounded text-green-700 font-medium select-none">
                    available </span> </div>
        </div>
        <div class="p-4 flex flex-col items-center">
            <p class="text-gray-400 font-light text-xs text-center">Hammond robotics</p>
            <h1 class="text-gray-800 text-center mt-1"><?php echo $product->name; ?> </h1>
            <p class="text-center text-gray-800 mt-1"><?php echo $product->price; ?> $</p>

            <a href="<?= URLROOT . '/Products/addToOrder/' . $product->id ?>" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-green-500 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">
                Add to order <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </a>
            <a href="<?= URLROOT . '/Pages/productDetails/' . $product->id ?>" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-blue-300 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>

                View Details

            </a>
        </div>
    </div>

    <!-- <?php endforeach; ?> -->

</div>


<!-- <nav aria-label="Page navigation example" class="flex justify-center items-center">
    <ul class="inline-flex -space-x-px">

        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
        </li>
        <li>
            <a href="#" aria-current="page" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
        </li>

    </ul>
</nav> -->



<?php
require APPROOT . '/views/inc/footer.php';
?>