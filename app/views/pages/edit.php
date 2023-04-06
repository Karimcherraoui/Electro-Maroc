<?php
require APPROOT . '/views/inc/header.php';


?>



<body class="bg-white font-[poppins] xl:mx-0 mx-2">

    <!-- container -->
    <section class="max-w-4xl p-6 mx-auto bg-neutral-200 rounded-md shadow-md my-12">
        <h1 class="text-4xl font-bold capitalize text-center">Edit Product</h1>
        <form action="<?php URLROOT . '/Products/edit' . $data['id']; ?>" method="POST" id="form" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-6 mt-4 xl:mx-28 ">
                <div>
                    <label for="name">Product Name</label>
                    <input id="name" type="text" name="name" value="<?php echo $data['name'] ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>

                <div>
                    <label for="marque">Marque</label>
                    <input id="marque" type="text" name="marque" value="<?php echo $data['marque'] ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>

                <div>
                    <label for="categorie">Categorie</label>
                    <input id="categorie" type="text" name="categorie" value="<?php echo $data['categorie'] ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>

                <div>
                    <label for="stock">Stock</label>
                    <input id="stock" type="number" name="stock" value="<?php echo $data['stock'] ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>

                <div>
                    <label for="price">Price</label>
                    <input id="price" type="text" name="price" value="<?php echo $data['price'] ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>
                <div>
                    <label for="Description">Description</label>
                    <textarea id="Description" name="description" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring"><?php echo $data['description'] ?></textarea>
                </div>
                <div>
                    <label class="block">
                        Product Image
                    </label>

                    <input id="file-upload" name="image" type="file" class="" name="image">

                </div>
            </div>

            <div class="flex justify-between mt-6">
                <div>
                    <button>
                        <a href="<?= URLROOT . '/Pages/dashboard' ?>" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-red-500 hover:bg-green-600 text-white transition ">
                            Cancel
                        </a>
                    </button>
                    <button type="submit" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-green-500 hover:bg-green-600 text-white transition ">
                        Save
                    </button>
                </div>

            </div>
        </form>
    </section>
</body>

</html>