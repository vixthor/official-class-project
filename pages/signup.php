<?php include("../layouts/header.php")  ?>
        <div class="">
            <form action="user.php" method="post" class=" bg-teal-100 my-32  mx-auto space-y-6 max-w-3xl p-5 border border-gray-500 rounded-lg">
                <h2 class="text-3xl text-center pt-3 font-semibold">Sign Up</h2>
                <p class="text-medium text-gray-600">Fill in the form below to sign in</p>
               <div class="flex space-x-3">
                <div class="w-1/2">
                    <label for="Firstname" class="">First Name</label>
                    <input type="text" name="Firstname" class="input" placeholder="Enter your First Name">
                </div>
                <div class=" w-1/2">
                    <label for="Lastname" class="">Last Name</label>
                    <input type="text" name="Username" class="input" placeholder="Enter your Last Name">
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
                <button class="w-full px-3 py-2 bg-teal-400 rounded-2xl focus:outline-none focus:border-teal-800 text-semibold">Sign Up</button>
            </form>
        </div>
        <footer class="text-center bg-black text-white text-sm h-8 items-center flex justify-center">&copy2022 Designed by Gbiyede Oghenetega Victor</footer>
    </main>
</body>
</html>