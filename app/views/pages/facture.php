<?php
require APPROOT . '/views/inc/header.php';
// show($data["idCommande"]);
// die;
// echo URLROOT . '/Products/deleteProductFromCart/' . $data['products'][0][0]->id;
?>


<div class="mt-10 flex flex-cols xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
    
    
    
    <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
        
        <table class="w-full text-left table-collapse ">
            <thead>
                <tr>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Image</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Product</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">prix unitaire</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Quantité</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Prix total</th>
                    
                    
                    
                </tr>
            </thead>
            
            <tbody>
                <h2>Facture d'achat - Commande #<?php echo $data["idCommande"]; ?></h2>
                <?php foreach ($data['details'] as $product) : ?>
                    


                    <tr class="odd:bg-gray-100 result_search">
                        <td class="p-2"> <img class="w-20 hidden md:block" src="<?php echo URLROOT . '/images/upload/' . $product->image; ?>" alt="dress" />
                        </td>
                        <td class="p-2">
                            <h3 class="text-md dark:text-white xl:text-5 font-semibold leading-6 text-gray-800"><?php echo $product->name; ?></h3>
                        </td>
                        <td class="p-2">
                            <p class="text-md dark:text-white xl:text-5 leading-6 product-price"><?php echo $product->price; ?> $ </p>
                        </td>
                        <td class="p-2">
                            <p class="text-base dark:text-white xl:text-lg leading-6 product-price">x <?php echo $product->quantite; ?></p>
                        </td>
                        <td class="p-2"><p class="text-base dark:text-white xl:text-lg leading-6 product-price"><?php echo $product->prix_total; ?>$</p></td>

                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
<div class="text-center px-72 flex flex-col gap-8">

    <p>Nous vous remercions pour votre achat sur notre site e-commerce. Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter à l'adresse e-mail ou au numéro de téléphone ci-dessus.
       <p > 
        Cordialement,<br>
        L'équipe de ElectroMaroc en ligne.</p>
    </p>
    </div>

    </div>
    <div class="border border-gray-800 bg-gray-50 dark:bg-gray-800 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
        <?php foreach ($data['client'] as $client) : ?>
            <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Customer</h3>
            <div class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                <div class="flex flex-col justify-start items-start flex-shrink-0">
                    <div class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">
                        <div class="flex justify-start items-start flex-col space-y-2">
                            <p class="text-base dark:text-white font-semibold leading-4 text-left text-gray-800"><?php echo $client->fullName; ?></p>

                        </div>
                    </div>

                    <div class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1.svg" alt="email">
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1dark.svg" alt="email">
                        <p class="cursor-pointer text-sm leading-5 "><?php echo $client->email; ?></p>
                    </div>
                </div>
                <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
                    <div class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                        <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                            <p class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">Shipping Address</p>
                            <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600"><?php echo $client->adress; ?></p>
                        </div>
                        <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 mb-10">
                            <p class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">Billing Address</p>
                            <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600"><?php echo $client->adress; ?></p>
                        </div>
                    </div>
                    <?php foreach ($data['total_prix'] as $prix) : ?>

                    <div class="flex flex-col gap-2 w-full justify-center items-center md:justify-start md:items-start">
                        <p  class="text-center mt-6 md:mt-6 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-96 2xl:w-full text-base font-medium leading-4 text-gray-800">Total Payé : <?php echo $prix->prix_total; ?></p>
                        
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<?php
require APPROOT . '/views/inc/footer.php';
?>