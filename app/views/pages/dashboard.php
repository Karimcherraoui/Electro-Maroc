<?php
require APPROOT . '/views/inc/header.php';
// show($data);

?>






<!-- Card Product -->
<div class="mt-10 xl:mb-32 xl:mx-20 ">
    <div class=" grid py-1 grid-rows-2 justify-center items-center font-bold">
<div class=" flex py-1 block justify-center items-center font-bold">

<a href="<?= URLROOT ?>/Products/categorie" class="text-sm hover:bg-green-100 text-blue-700 block px-4 py-2">Add Categorie</a>


    <a href="<?= URLROOT ?>/Products/product" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">All Product</a>
    <?php foreach ($data['categories'] as $categorie) : ?>

    <a href="<?= URLROOT .'/Products/product_cat/'.$categorie->name;  ?>" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"><?php echo $categorie->name; ?></a>
    
    <?php endforeach; ?>

    <!-- <a href="<?= URLROOT ?>/Products/product_cat/laptop" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Laptops</a>
    
    
    <a href="<?= URLROOT ?>/Products/product_cat/tv" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Televisions</a>
     -->
</div>

        
<!-- <div >

    <form action="<?php echo URLROOT . '/Products/addCategorie/'; ?>" method="POST" id="categorieForm" >
        <div class="grid grid-cols-3 text-sm font-normal w-full ml-6">

            <label class="text-center mt-3 ml-16" for="name">Categorie Name :</label>
            <input id="name" name="name" type="text" class=" mt-2 w-48 h-7	text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
            <button form="categorieForm"  type="submit" class="w-1/3 h-7 mt-1.5 rounded-md focus:outline-none font-normal bg-green-500 hover:bg-green-600 text-white transition ml-4">
                Save
            </button>
        </div>
    
</form>
</div> -->
    
</div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-medium mb-4">Product List</h2>
        <div class="my-4 flex justify-end">
            <button class="bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 rounded-md"><a href="<?= URLROOT . '/Products/addProduct'; ?>">Add Product</a></button>
        </div>
        <table class="w-full text-left table-collapse">
            <thead>
                <tr>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Image</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Name</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">stock</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Price</th>
                    <th class="text-sm font-medium text-gray-700 p-2 bg-gray-100">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['products'] as $product) : ?>
                    <tr class="odd:bg-gray-100 result_search">
                        <td class="p-2"><img class="h-16 w-22" src="<?php echo URLROOT . '/images/upload/' . $product->image; ?>"></td>
                        <td class="p-2 productName"><?php echo $product->name; ?></td>
                        <td class="p-2"><?php echo $product->stock; ?></td>
                        <td class="p-2"><?php echo $product->price; ?></td>
                        <td class="p-2">
                            <button class="text-indigo-500 hover:text-indigo-600 mr-2"><a href="<?= URLROOT . '/Products/edit/' . $product->id ?>">Edit</a></button>
                            <button class="text-red-500 hover:text-red-600"><a href="<?= URLROOT . '/Products/delete/' . $product->id ?>">Delete</a></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>




</div>

</body>

</html>