<?php
require APPROOT . '/views/inc/header.php';
// show($data['products'][0][0]->id);
// echo URLROOT . '/Products/deleteProductFromCart/' . $data['products'][0][0]->id;
?>





<div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
    <div class="flex justify-start item-start space-y-2 flex-col">
        <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Order #13432</h1>
        <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600">17 fev 2023 at 11:34 PM</p>
    </div>
    <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
        <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
            <form method="POST" id="prodform" action="<?= URLROOT . '/Products/addOrderToCommande/'; ?>" class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                
                <div  class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                    <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">Panier (<?php echo $data['num']; ?>)</p>
                
                <?php foreach ($data['products'] as $product) : ?>
                    <input type="number" hidden name="products[]" value="<?= $product[0]->id ?>">
                    <div class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                        <div class="pb-4 md:pb-8 w-full md:w-40">
                            <img class="w-full hidden md:block" src="<?php echo URLROOT . '/images/upload/' . $product[0]->image; ?>" alt="dress" />
                        </div>


                        <div class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                            <div class="w-full flex flex-col justify-start items-start space-y-8">
                                <h3 class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800"><?php echo $product[0]->name; ?></h3>
                                <div class="flex justify-start items-start flex-col space-y-2">
                                    <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-300">Marque: </span> <?php echo $product[0]->marque; ?></p>

                                </div>
                            </div>  
                            <div class="flex justify-between space-x-8 items-start w-full">
                                <p class="text-base dark:text-white xl:text-lg leading-6 product-price"><?php echo $product[0]->price; ?> $ </p>
                                <div class="inline-flex items-center mt-2">
                                    <!-- <button class="moin bg-white rounded-l border text-dark hover:bg-gray-200 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                        </svg>
                                    </button> -->
                                    <input class="nbQte bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none" type="number" name="qte[]"  max="10" min="1" value="1" />
                                    <!-- 1 </input> -->
                                    <!-- <button class="plus bg-white rounded-r border text-dark hover:bg-gray-200 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                    </button> -->
                                </div>
                                <p class="text-base dark:text-white xl:text-lg font-semibold leading-6 text-gray-800 total-price"></p>
                                <div>
                                    <a class="" href="<?= URLROOT . '/Products/deleteProductFromCart/' . $data['products'][0][0]->id; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            </form>
            <div class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                    <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Summary</h3>
                    
                    <div class="flex justify-between items-center w-full">
                        <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
                        <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600 total"></p>
                    </div>

                </div>
                <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                    <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Shipping</h3>
                    <div class="flex justify-between items-start w-full">
                        <div class="flex justify-center items-center space-x-4">
                            <div class="w-8 h-8">
                                <img class="w-full h-full" alt="logo" src="https://i.ibb.co/L8KSdNQ/image-3.png" />
                            </div>
                            <div class="flex flex-col justify-start items-center">
                                <p class="text-lg leading-6 dark:text-white font-semibold text-gray-800">DPD Delivery<br /><span class="font-normal">Delivery with 24 Hours</span></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="bg-gray-50 dark:bg-gray-800 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
            <?php foreach ($data['users'] as $user) : ?>
                <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Customer</h3>
                <div class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                    <div class="flex flex-col justify-start items-start flex-shrink-0">
                        <div class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">
                            <div class="flex justify-start items-start flex-col space-y-2">
                                <p class="text-base dark:text-white font-semibold leading-4 text-left text-gray-800"><?php echo $user->fullName; ?></p>

                            </div>
                        </div>

                        <div class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1.svg" alt="email">
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1dark.svg" alt="email">
                            <p class="cursor-pointer text-sm leading-5 "><?php echo $user->email; ?></p>
                        </div>
                    </div>
                    <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
                        <div class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                            <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                                <p class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">Shipping Address</p>
                                <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600"><?php echo $user->adress; ?></p>
                            </div>
                            <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4">
                                <p class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">Billing Address</p>
                                <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600"><?php echo $user->adress; ?></p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-full justify-center items-center md:justify-start md:items-start">
                            <a href="<?= URLROOT . '/Pages/allproduct/'; ?>" class="text-center mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5 hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-96 2xl:w-full text-base font-medium leading-4 text-gray-800">Continue Shopping</a>
                            <button form="prodform" class="text-center mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-96 2xl:w-full text-base font-medium leading-4 text-gray-800">Checkout</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>




<?php
require APPROOT . '/views/inc/footer.php';
?>