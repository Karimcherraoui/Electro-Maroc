<?php
require APPROOT . '/views/inc/header.php';
?>


<body class="bg-white font-[poppins] xl:mx-0 mx-2">

    <!-- container -->
    <section class="max-w-4xl p-6 mx-auto bg-neutral-200 rounded-md shadow-md my-12">
        <h2 class="text-4xl font-bold capitalize text-center">Add Product</h2>

        <form action="<?php URLROOT . '/Products/addProduct'; ?>" method="POST" id="form" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-6 mt-4 xl:mx-28 ">
                <div>
                    <label for="name">Product Name</label>
                    <input id="name" name="name[]" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>
                <div>
                    <label for="marque">Marque</label>
                    <input id="marque" name="marque[]" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>


                <div>
                    <label for="categorie">categorie</label>
                    <input id="categorie" name="categorie[]" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>

                <div>
                    <label for="stock">Stock</label>
                    <input id="stock" name="stock[]" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>

                <div>
                    <label for="price">Price</label>
                    <input id="price" name="price[]" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                </div>
                <div>
                    <label for="Description">Description</label>
                    <textarea id="Description" name="description[]" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring"></textarea>
                </div>
                <div>
                    <label for="image" class="block">
                        Product Image
                    </label>

                    <input id="image" name="image[]" type="file">

                </div>
            </div>

            <div class="flex justify-between mt-6">
                <div>
                    <a href="<?= URLROOT . '/Products/product' ?>" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-red-500 hover:bg-green-600 text-white transition ">
                        Cancel
                    </a>

                    <button type="submit" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-green-500 hover:bg-green-600 text-white transition ml-4">
                        Save
                    </button>

                </div>

                <div>
                    <div id="oneMore" class="px-6 py-2  transform rounded-md focus:outline-none font-bold bg-indigo-500 hover:bg-indigo-600 text-white transition ">
                        Add Another Product
                    </div>
                </div>
            </div>
        </form>
    </section>



    <script src="<?php echo URLROOT . '/js/addMore.js'; ?>"></script>

</body>

</html>