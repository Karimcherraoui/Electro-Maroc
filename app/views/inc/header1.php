<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Login ElectroMaroc</title>
</head>

<body class="bg-gray-300 ">
    <!-- Start Nav-bar  -->

    <nav
        class="p-5 bg-gradient-to-r from-gray-600 to-gray-400 rounded-bl-lg rounded-br-lg shadow-xl md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div>

                <span class="text-blue-500 text-2xl font-[poppins] font-bold ">E</span><span
                    class="text-2xl font-[poppins] text-white font-bold">lectro</span><span
                    class="text-sky-600 text-2xl font-[poppins] font-bold">M</span><span
                    class="text-2xl font-[poppins] text-white font-bold">aroc</span>
            </div>

            <!-- Humburger menu -->
            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu-outline" onclick="Menu(this)"></ion-icon>
            </span>
        </div>
        <!-- list of menu -->

        <ul
            class="font-sans font-medium text-base md:flex md:items-center  hidden md:relative   w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class=" text-md hover:text-cyan-500 duration-500">Home</a>
            </li>
            <li class="mx-4 my-6 md:my-0 relative">
                <button href="#" class="text-md hover:text-cyan-500 duration-500">Categories</button>
                <!-- drop Categories -->


                <div class="lg:absolute bg-white mr-4 rounded-md mt-7 p-2">
                    <ul class="space-y-2 ">
                        <li>
                            <a href="#"
                                class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">Phones</a>
                        </li>
                        <li>
                            <a href="#">Televisions</a>
                        </li>
                        <li>
                            <a href="#">Ordinateurs</a>
                        </li>
                    </ul>
                </div>

                <!-- drop Categories -->

            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class=" text-md hover:text-cyan-500 duration-500">Products</a>
            </li>
            <li class="mx-2 my-6 md:my-0">
                <a href="#" class=" text-md hover:text-cyan-500 duration-500">About Us</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class=" text-md hover:text-cyan-500 duration-500">Contact Us</a>
            </li>
            <button
                class="bg-gradient-to-r from-blue-400 to-blue-300 font-[poppins] duration-500 px-6 py-2 mx-4 hover:bg-cayan-500 rounded">
                <a href="#">Login</a>
            </button>
        </ul>

    </nav>

    <!-- End nav-bar  -->