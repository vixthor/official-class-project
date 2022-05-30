<?php require("../layouts/header.php")  ?>

<div class="">
            <form action="#" method="post" class=" form_image my-24  mx-auto space-y-6 max-w-3xl p-5 border border-gray-500 rounded-lg">
                <h2 class="text-3xl text-center pt-3 font-semibold">Sign Up</h2>
                <p class="text-medium text-gray-600">Fill in the form below to sign in</p>
        
                <div class="flex space-x-3">
                <div class="w-1/2">
                    <label for="Firstname" class="">First Name</label>
                    <input type="text" name="firstName" class="input" placeholder="Enter your First Name">
                </div>
                <div class=" w-1/2">
                    <label for="Lastname" class="">Last Name</label>
                    <input type="text" name="lastName" class="input" placeholder="Enter your Last Name">
                </div>
               </div>
                <div class="">
                    <label for="email" class="">Email Address</label>
                    <input type="email" name="email" class="input" placeholder="Enter your Email Address">
                </div>
                <div class="">
                    <label for="email" class="">Password</label>
                    <input type="password" name="password" class="input" placeholder="Enter your Password">
                </div>
                <div class="">
                    <label for="date" class="">Date</label>
                    <input type="date" name="date" class="input" placeholder="">
                </div>
                <button name="submit" class="w-full px-3 py-2 bg-teal-400 rounded-2xl hover:bg-white hover:text-black text-semibold">Sign Up</button>
            </form>
        </div>
<?php  require("../layouts/footer.php")    ?>