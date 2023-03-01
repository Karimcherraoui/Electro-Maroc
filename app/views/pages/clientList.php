<?php
require APPROOT . '/views/inc/header.php';

// show($data);

?>




<div class="flex justify-center gap-6 mt-5">
    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
        href="#">
        <!-- <div class="p-5">
            <div class="flex justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>

            <div class="ml-2 w-full flex-1">
                <div>
                    <div class="mt-3 text-3xl font-bold leading-8"><?= $data['num']?> Product(s)</div>

                    <div class="mt-1 text-base text-gray-600">In stock</div>
                </div>

            </div>
        </div> -->
    </a>
</div>

<!-- Card Product -->
<div class="mt-10 xl:mb-32 xl:mx-20 ">


    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-medium mb-4">Client List</h2>
        <table class="w-full text-left table-collapse">
            <thead>
                <tr>
                    <th class="text-sm font-bold text-black p-2 bg-gray-100 ">fullName</th>
                    <th class="text-sm font-bold text-black p-2 bg-gray-100 ">Numero</th>
                    <th class="text-sm font-bold boldtext-black p-2 bg-gray-100 ">Adress</th>
                    <th class="text-sm font-bold text-black p-2 bg-gray-100 ">Ville</th>
                    <th class="text-sm font-bold text-black p-2 bg-gray-100 ">UserName</th>
                    <th class="text-sm font-bold text-black p-2 bg-gray-100 ">Email</th>

                  


                </tr>
            </thead>
            
            <tbody>
            <?php foreach ($data as $client) : ?>

                <tr class="odd:bg-gray-100 result_search">
                <td class="p-2"><?php echo $client->fullName; ?></td>
                <td class="p-2"><?php echo $client->numero; ?></td>
                <td class="p-2"><?php echo $client->adress; ?></td>

                <td class="p-2"><?php echo $client->ville; ?></td>
                <td class="p-2"><?php echo $client->userName; ?></td>
                <td class="p-2"><?php echo $client->email; ?></td>

                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>




</div>

</body>

</html>