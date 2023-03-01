


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.tailwindcss.com" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>ElectroMaroc</title>
</head>

<body>

    <div class="flex flex-wrap place-items-center ">
        <section class="relative w-full ">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white ">
                <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                    <a href="<?= URLROOT ?>">

                        <span class="text-blue-500 text-2xl font-[poppins] font-bold ">E</span><span class="text-2xl font-[poppins] text-white font-bold">lectro</span><span class="text-sky-600 text-2xl font-[poppins] font-bold">M</span><span class="text-2xl font-[poppins] text-white font-bold">aroc</span>
                    </a>
                    <!-- Nav Links -->
                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                        <li><a class="hover:text-gray-200" href="<?= URLROOT ?>">Home</a></li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2  md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Categories <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"  class=" navbar-item hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44 ">
                                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="<?= URLROOT ?>/Pages/allproduct_cat/smartphone" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Smartphones</a>
                                    </li>
                                    <li>
                                        <a href="<?= URLROOT ?>/Pages/allproduct_cat/laptop" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Laptops</a>
                                    </li>
                                    <li>
                                        <a href="<?= URLROOT ?>/Pages/allproduct_cat/tv" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Televisions</a>
                                    </li>
                                    
                                </ul>

                            </div>
                        </li>
                        <li><a class="navbar-item hover:text-gray-200" href="<?= URLROOT . '/Pages/allproduct' ?>">Products</a></li>

                        <?php if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] === 'admin')) : ?>
                            <li>
                                <a class="navbar-item hover:text-gray-200" href="<?= URLROOT . '/Products/product' ?>">Dashboard</a>
                            </li>
                            <li>
                                <a class="navbar-item hover:text-gray-200" href="<?= URLROOT . '/Products/dashboardCmdUser' ?>">Commande-List</a>
                            </li>
                            <li><a class="navbar-item hover:text-gray-200" href="<?= URLROOT . '/Products/clientList' ?>">Client-list</a></li>
                        <?php elseif (isset($_SESSION['user_role']) && ($_SESSION['user_role'] === 'client')) : ?>
                            <li>

                                <a class=" navbar-item hover:text-gray-200" href="<?= URLROOT . '/Products/dashboardCmd' ?>">Commande-List</a>
                            </li>

                        <?php endif; ?>


                        <li><a class="navbar-item hover:text-gray-200" href="<?= URLROOT . '/Pages/contactUs' ?>">Contact Us</a></li>
                    </ul>
                    <!-- Header Icons -->
                    <div class=" navbar-item hidden xl:flex items-center space-x-5 items-center">

                        <a class="flex items-center hover:text-gray-200" href="<?= URLROOT . '/Products/commande' ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="flex absolute -mt-5 ml-4">
                                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                                </span>
                            </span>
                        </a>
                       
                        <!-- Sign In / Register      -->
                        <?php if (isset($_SESSION['user_id'])) : ?>

                            <a class="navbar-item flex items-center hover:text-gray-200" href="<?= URLROOT . '/Users/logout' ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>

                            </a>


                        <?php else : ?>

                            <a class=" navbar-item flex items-center hover:text-gray-200" href="<?= URLROOT . '/users/login' ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
                <!-- Responsive navbar -->
                <a class="xl:hidden flex mr-6 items-center" href="<?= URLROOT . '/Products/commande' ?>" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="flex absolute -mt-5 ml-4">
                        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                        </span>
                    </span>
                </a>
                <a class="navbar-burger self-center mr-12 xl:hidden" href="#" data-target="navbarMenu" id="navbarMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </a>
            </nav>

        </section>
    </div>
    <!-- Does this resource worth a follow? -->

</body>

</html>