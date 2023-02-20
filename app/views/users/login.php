<?php
require APPROOT . '/views/inc/header.php';
?>


<section class="bg-blue-300 min-h-screen flex items-center justify-center">

    <!-- login container -->

    <div class="bg-gray-100 flex  rounded-2xl shadow-lg max-5xl p-5">

        <!-- form -->

        <div class="sm:w-1/2 p-5 xl:ml-20">
            <h2 class="font-bold text-2xl">Login</h2>
            <p class="text-sm mt-5"> If you already a member, easly log in</p>
            <form action="<?= URLROOT . '/Users/login' ?>" class="flex flex-col gap-4" method="POST">
                <div>

                    <input class="p-2 mt-2 rounded-xl border <?php echo (!empty($data['email_err'])) ? 'is-invalid ' : ''; ?>" value="<?php echo $data['email']; ?>" type="email" name="email" placeholder="Email">
                    <span class="invalid-feedback text-red-600 "><?= '<br>'; ?><?= $data['email_err']; ?></span>
                </div>
                <div class="relative">
                <input class="p-2 mt-2 rounded-xl border <?php echo (!empty($data['password_err'])) ? 'is-invalid ' : ''; ?>"  type="password" name="password" placeholder="password">
                    <span class="invalid-feedback text-red-600 "><?= '<br>'; ?><?= $data['password_err']; ?></span> 
                </div>
                <button class="bg-blue-300 rounded-xl border py-2 w-1/2 hover:scale-110">Login</button>
                <div class="flex">
                    <input type="checkbox" name="check" >
                    <label class="text-sm ml-2">Login As Admin</label>

                    
                </div>

                <div class="mt-4 grid grid-cols-3 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center text-sm"> OR </p>
                    <hr class="border-gray-400">
                </div>
                <div class="text-xs flex items-center justify-center justify-between w-full">
                    If you don't have an account .
                </div>
                
                <button class="bg-green-300 border py-2 w-2/4 rounded-xl mt-2 text-black hover:scale-110">
                    <a href="<?= URLROOT . '/Users/register' ?>">

                        Register Now
                    </a>
                </button>


            </form>

        </div>

        <!-- image -->

        <div class="sm:block hidden w-1/2 p-5 mt-20">
            <img class="rounded-2xl " src="http://localhost/electromaroc/public/images/th.webp" alt="login Image">
        </div>

    </div>
</section>

</body>


</html>