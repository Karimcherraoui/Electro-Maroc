<?php
require APPROOT . '/views/inc/header.php';
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
        <h2 class="text-lg font-medium mb-4">Commandes List</h2>
        <table class="w-full text-left table-collapse">
            <thead>
                <tr>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Etat</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Client</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Date creation</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">date d'envoie</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">date livraison</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Prix total</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Actions</th>


                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $commande) : ?>
                <tr class="odd:bg-gray-100 result_search">
                <td class="p-2"><?php echo $commande->etat; ?></td>
                <td class="p-2"><?php echo $commande->fullName; ?></td>
                <td class="p-2"><?php echo $commande->date_creation; ?></td>
                <td class="p-2"><?php echo $commande->date_envoi; ?></td>
                <td class="p-2"><?php echo $commande->date_livraison; ?></td>
                <td class="p-2"><?php echo $commande->price; ?></td>
                <td class="p-2 flex">
                <a class="" href="<?= URLROOT . '/Products/annuler/' .$commande->commande_id ?>">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" >
                     </svg>
                </a>
                <a class="ml-4" href="<?= URLROOT . '/Products/envoiCommande/' .$commande->commande_id ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </a>
                <a class="ml-4" href="<?= URLROOT . '/Products/livraisonCommande/' .$commande->commande_id ?>">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>

                </a>


                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>




</div>

</body>

</html>