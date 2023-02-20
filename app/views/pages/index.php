<?php
require APPROOT . '/views/inc/header.php';
?>



<div class="px-5 py-5 bg-white lg:py-10">

    <div class="grid lg:grid-cols-2 items-center justify-items-center gap-5 bg-blue-100 py-10 rounded-xl shadow-xl">
        <div class="flex flex-col justify-center items-center">
            <span class="w-full text-center font-bold text-2xl md:text-3xl lg:text-4xl xl:text-5xl ">
                Buy A new Product online
            </span>
            <br><br>
            <span class="text-blue-500 w-full text-center font-bold text-1xl md:text-2xl lg:text-3xl xl:text-4xl">
                The leader of Electro Product
            </span>
            <div class="pt-10 pb-10 w-3/4 text-center">
                <span class="text-gray-500 text-sm text-center md:text-md lg:text-lg xl:text-xl">
                    Electro Maroc est un revendeur spécialisé dans la distribution de produits électroniques de toutes
                    sortes au Maroc.
                    Il propose une large gamme de produits électroniques, allant des appareils de
                    télécommunication aux appareils électroménagers, en passant par les produits informatiques et de
                    divertissement. Il s'efforce de fournir des produits de qualité à des prix abordables pour répondre
                    aux besoins de sa clientèle.
                </span>
            </div>
            <div class="flex flex-row gap-10 pb-10">

                <button class="bg-gradient-to-r from-blue-400 to-blue-300 text-black font-[arial] border-current rounded hover:scale-110 px-10 py-2 duration-500 mx-3 border border-black">
                    <a href="#">Buy</a>
                </button>
                <button class="text-black font-[arial] border border-black rounded hover:scale-110 px-6 py-2 duration-500">
                    <a href="#" class="underline">More info</a>
                </button>
            </div>
        </div>



        <div class="w-5/6  ">

            <img class="w-full " src="http://localhost/electromaroc/public/images/iphone11.webp" alt="imge prd1">
        </div>

    </div>

    <div class="services grid grid-cols justify-center">
        <div class=" ml-20 text-1xl md:text-2xl lg:text-3xl xl:text-4xl mt-20">

            <h2 class="">Nos services</h2>
        </div>
        <div class="xl:flex flex-row mt-20 ">

            <div class="service-item flex flex-col items-center justify-center text-center w-sm">
                <i class="fas fa-truck mb-10 text-7xl"></i>
                <h3 class="font-bold mb-4 text-blue-500">Livraison de produits</h3>
                <p class="w-2/3 mb-10">Nous proposons une livraison rapide et fiable pour vos produits.</p>
            </div>

            <div class="service-item flex flex-col items-center justify-center text-center w-sm">
                <i class="fas fa-briefcase mb-10 text-7xl"></i>
                <h3 class="font-bold mb-4 text-blue-500">Prestations de services professionnels</h3>
                <p class="w-2/3 mb-10">Notre équipe expérimentée offre des services de qualité pour répondre à vos
                    besoins
                    professionnels.
                </p>
            </div>

            <div class="service-item flex flex-col items-center justify-center text-center">
                <i class="fas fa-comments mb-10 text-7xl"></i>
                <h3 class="font-bold mb-4 text-blue-500">Conseils et assistance</h3>
                <p class="w-2/3 mb-10">Nous sommes là pour vous aider et vous conseiller tout au long de votre
                    expérience avec
                    nous.</p>
            </div>
        </div>

    </div>

    <div class="my-20">

        <div class=" flex flex-row justify-between">
            <!-- Products Section  -->
            <h2 class=" ml-20 text-1xl md:text-2xl lg:text-3xl xl:text-4xl"> Smartphone Collection</h2>

            <a href="<?= URLROOT ?>/Pages/allproduct_cat/smartphone" class=" flex flex-row items-center mr-20 underline text-sm md:text-sm lg:text-md xl:text-lg">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>

        </div>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 pt-20 ">
            
            <?php foreach ($data['smartphone'] as $product) : ?>
                <div class="shadow-lg bg-white rounded-lg">
                    <a href="#">
                        <img class="w-lg rounded-tl-lg rounded-tr-lg py-10 max-h-lg	" src="<?php echo URLROOT . '/images/upload/' . $product->image; ?>" alt="imge prd1">
                    </a>
                    <div class="p-5 ml-4 flex flex-col items-center">
                        <div class="flex flex-row justify-between">
                            <h2><a href="#" class="font-bold text-lg"><?php echo $product->name; ?></a></h2>

                        </div>


                        <div class="flex flex-row my-6">

                            <div class="bg-black h-5 w-5 rounded-full shadow-md mr-2"> </div>
                            <div class="bg-white h-5 w-5 rounded-full shadow-md mr-2"> </div>
                            <div class="bg-red-800 h-5 w-5 rounded-full shadow-md mr-2"> </div>
                            <div class="bg-blue-500 h-5 w-5 rounded-full shadow-md mr-2"> </div>
                        </div>
                        <div class="flex items-center gap-2 mt-2 ">
                            <h3><a href="#" class="text-lg mr-3"> <?php echo $product->price; ?> $ </a></h3>

                            <span class="bg-green-400 px-2 py-1 rounded-md text-sm">
                                Save 20%
                            </span>

                        </div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-blue-600 to-blue-400 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center mb-5 ml-8 mr-8 xl:mr-1 xl:ml-10 hover:scale-110 border border-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            Add to cart
                        </a>
                        <a href="<?= URLROOT ?>/Pages/productDetails/<?= $product->id ?>" class="bg-gradient-to-r from-gray-600 to-gray-400 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center mb-5 ml-8 mr-8  xl:mr-8 hover:scale-110 border border-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>

                            View Details
                        </a>
                    </div>


                </div>
            <?php endforeach; ?>

        </div>

    </div>


    <div class="my-20">

        <div class=" flex flex-row justify-between">
            <!-- Products Section  -->
            <h2 class=" ml-20 text-1xl md:text-2xl lg:text-3xl xl:text-4xl"> Televisions Collection</h2>

            <a href="<?= URLROOT ?>/Pages/allproduct_cat/tv" class=" flex flex-row items-center mr-20 underline text-sm md:text-sm lg:text-md xl:text-lg">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>

        </div>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 pt-20 ">
            <?php foreach ($data['tv'] as $product) : ?>
                <div class="shadow-lg bg-white rounded-lg">
                    <a href="#">
                        <img class="w-lg rounded-tl-lg rounded-tr-lg py-10" src="<?php echo URLROOT . '/images/upload/' . $product->image; ?>" alt="imge prd1">
                    </a>
                    <div class="p-5 ml-4 flex flex-col items-center">
                        <div class="flex flex-row justify-between">
                            <h2><a href="#" class="font-bold text-lg"><?php echo $product->name; ?></a></h2>

                        </div>


                        <div class="flex flex-row my-6">

                            <div class="bg-black h-5 w-5 rounded-full shadow-md mr-2"> </div>
                            <div class="bg-white h-5 w-5 rounded-full shadow-md mr-2"> </div>
                            <div class="bg-red-800 h-5 w-5 rounded-full shadow-md mr-2"> </div>
                            <div class="bg-blue-500 h-5 w-5 rounded-full shadow-md mr-2"> </div>
                        </div>
                        <div class="flex items-center gap-2 mt-2 ">
                            <h3><a href="#" class="text-lg mr-3"> <?php echo $product->price; ?> $ </a></h3>

                            <span class="bg-green-400 px-2 py-1 rounded-md text-sm">
                                Save 20%
                            </span>

                        </div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-blue-600 to-blue-400 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center mb-5 ml-8 mr-8 xl:mr-1 xl:ml-10 hover:scale-110 border border-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            Add to cart
                        </a>
                        <a href="<?= URLROOT ?>/Pages/productDetails/<?= $product->id ?>" class="bg-gradient-to-r from-gray-600 to-gray-400 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center mb-5 ml-8 mr-8  xl:mr-8 hover:scale-110 border border-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>

                            View Details
                        </a>
                    </div>


                </div>
            <?php endforeach; ?>

    </div>



    </dv>
    <div class="my-20">

        <div class=" flex flex-row justify-between">
            <!-- Products Section  -->
            <h2 class=" ml-20 text-1xl md:text-2xl lg:text-3xl xl:text-4xl"> Ordinateurs Collection</h2>

            <a href="<?= URLROOT ?>/Pages/allproduct_cat/laptop" class=" flex flex-row items-center mr-20 underline text-sm md:text-sm lg:text-md xl:text-lg">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>

        </div>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 pt-20 ">
            <?php foreach ($data['laptop'] as $product) : ?>
                <div class="shadow-lg bg-white rounded-lg">
                    <a href="#">
                        <img class="w-lg rounded-tl-lg rounded-tr-lg py-10" src="<?php echo URLROOT . '/images/upload/' . $product->image; ?>" alt="imge prd1">
                    </a>
                    <div class="p-5 ml-4 flex flex-col items-center">
                        <div class="flex flex-row justify-between">
                            <h2><a href="#" class="font-bold text-lg"><?php echo $product->name; ?></a></h2>

                        </div>


                        <div class="flex flex-row my-6">

                            <div class="bg-black h-5 w-5 rounded-full shadow-md mr-2"> </div>
                            <div class="bg-white h-5 w-5 rounded-full shadow-md mr-2"> </div>
                            <div class="bg-red-800 h-5 w-5 rounded-full shadow-md mr-2"> </div>
                            <div class="bg-blue-500 h-5 w-5 rounded-full shadow-md mr-2"> </div>
                        </div>
                        <div class="flex items-center gap-2 mt-2 ">
                            <h3><a href="#" class="text-lg mr-3"> <?php echo $product->price; ?> $ </a></h3>

                            <span class="bg-green-400 px-2 py-1 rounded-md text-sm">
                                Save 20%
                            </span>

                        </div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-blue-600 to-blue-400 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center mb-5 ml-8 mr-8 xl:mr-1 xl:ml-10 hover:scale-110 border border-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            Add to cart
                        </a>
                        <a href="<?= URLROOT ?>/Pages/productDetails/<?= $product->id ?>"" class=" bg-gradient-to-r from-gray-600 to-gray-400 rounded-full py-2 px-4 text-gray-50 flex flex-row justify-center mb-5 ml-8 mr-8 xl:mr-8 hover:scale-110 border border-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>

                            View Details
                        </a>
                    </div>


                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<img src="http://localhost/electromaroc/public/images/banner.webp" alt="Avon logo" class=" w-full rounded mb-20 mt-20">
</div>


































<?php
require APPROOT . '/views/inc/footer.php';
?>