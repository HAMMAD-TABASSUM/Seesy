<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
    <title>Sign In</title>
</head>

<body class="bg-black text-white">

    <header class="px-32 m-auto flex justify-between py-6">
        <div>
            <img src="assets/icons/logo.svg" alt="">
        </div>
        <nav class="flex gap-x-9">
            <a href="">Item First</a>
            <a href="">Item Two</a>
            <a href="">Item Three</a>
            <a href="">Item Four</a>
            <a href="">Item Five</a>
        </nav>
        <div class="flex gap-x-8">
            <img class="w-4" src="assets/icons/alert.svg" alt="">
            <img class="w-4" src="assets/icons/settings.svg" alt="">
            <img class="w-4" src="assets/icons/user.svg" alt="">
        </div>
    </header>

    <div class="inner-container pt-32 m-auto">
        <h1 class="text-3xl pl-10">Welcome To Seesy</h1>
        <div class="flex justify-around pt-16 pb-2.5">
            <div class="border-b border-lime-400 pb-2.5 w-1/2 flex justify-center">
                <a class="text-xl" href="index.html">Sign In</a>
            </div>
            <div class="border-b border-slate-900 pb-2.5 w-1/2 flex justify-center">
                <a class="text-xl opacity-40" href="<?= site_url('Seesy/signUp'); ?>">Sign Up</a>
            </div>
        </div>

        <form method="post" action="<?= site_url('seesy/login') ?>">
            <div class="pt-20 flex flex-col gap-y-2.5">
                <input class="w-full py-4 px-6 rounded outline-none text-black" name="email" type="email" placeholder="Email">
                <input class="w-full py-4 px-6 rounded outline-none text-black" name="password" type="password" placeholder="Password">
                <input class="w-full py-4 px-6 rounded outline-none text-black" type="text" placeholder="SSO">
                <button type="submit" class="py-5 w-full rounded bg-violet-700 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Sign
                    In</button>
            </div>
        </form>

        <div class="pt-12 flex flex-col gap-y-2">
            <button class="border-gradient flex items-center px-7 py-4 w-full rounded ">
                <img class="pr-7" src="<?php echo base_url('assets/icons/google.svg'); ?>" alt="logo" alt="">Sign in with Google
            </button>
            <button class="border-gradient flex items-center px-7 py-4 w-full rounded ">
                <img class="pr-7" src="<?php echo base_url('assets/icons/LinkedIn.svg'); ?>" alt="">Sign in with LinkedIn
            </button>
        </div>
    </div>
    <p class="float-right mr-32">Forgot password?</p>
</body>

</html>