<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Profile</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.1.1/dist/alpine.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>

<body class="background-gradient text-white">
    <header class="flex justify-between py-6 px-32 m-auto">
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
        <div class="flex gap-x-8 items-center">
            <img class="w-4" src="assets/icons/Chat.svg" alt="">
            <img class="w-4" src="assets/icons/alert.svg" alt="">
            <div class="">
                <div x-data="{ open: false }" class="relative">
                    <button x-on:click="open = true" class="flex items-center focus:bg-violet-600 focus:outline-none py-2.5 px-3.5 rounded-t" type="button">
                        <img class="w-4" src="assets/icons/settings.svg" alt="">
                    </button>
                    <ul x-show="open" x-on:click.away="open = false" class="bg-violet-600 text-gray-700 rounded shadow-lg absolute py-7 px-2.5 top-8 right-0" style="min-width:15rem">
                        <li>
                            <a href="#" class="block hover:bg-violet-500 rounded-3xl text-white whitespace-no-wrap py-2 px-4">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:bg-violet-500 rounded-3xl text-white whitespace-no-wrap py-2 px-4">
                                Manage My Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <img class="w-4" src="assets/icons/user.svg" alt="">
        </div>
    </header>
    <div class="pt-6 px-32 m-auto ">
        <div class="pb-10 border-b-2 border-stone-800">
            <h2 class="text-xl">Cotswold AUDI</h2>
            <div class="flex justify-between">
                <h1 class="text-3xl pt-3">MANAGE MY Account</h1>
            </div>
        </div>
        <div class="pl-32 pt-12">
            <div class="flex gap-x-11">
                <span class="text-xl">Company Details</span>
                <span class="opacity-50">My Videos</span>
            </div>
            <?php foreach ($vacancy as $Key => $value) { ?>
                <div class="py-28">
                    <div class="flex justify-between">
                        <h1 class="pb-5 text-xl">About the company</h1>
                        <a href="aboutCompany.php"></a>
                        <!-- <img src="assets/icons/edit_pen.svg" alt=""> -->
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="py-7 flex flex-col gap-y-7 border-t border-zinc-900">
                    <div class="flex justify-between">
                        <h1 class="text-xl">Your logo</h1>
                        <img src="assets/icons/edit_pen.svg" alt="">
                    </div>
                    <div class="flex items-center">
                        <img class="w-24 h-24" src="assets/icons/evitar.svg" alt="">
                        <span class="pl-5">Mylogo1.png</span>
                    </div>
                </div>
                <div class="py-7 flex flex-col gap-y-5 border-t border-zinc-900">
                    <div class="flex justify-between">
                        <h1 class="text-xl">Primary location</h1>
                        <img src="assets/icons/edit_pen.svg" alt="">
                    </div>
                    <p class="text-base">123 Street Name, London EC1A 2AB</p>
                </div>
                <div class="py-7 flex flex-col gap-y-5 border-t border-zinc-900">
                    <div class="flex justify-between">
                        <h1 class="text-xl">Other locations</h1>
                        <img src="assets/icons/edit_pen.svg" alt="">
                    </div>
                    <p class="text-base">456 Street Name, London EC2 2CD</p>
                    <p class="text-base">789 Street Name, London EC3 2EF</p>
                </div>
                <div class="py-7 flex flex-col gap-y-5 border-t border-zinc-900">
                    <div class="flex justify-between">
                        <h1 class="text-xl">Company size</h1>
                        <img src="assets/icons/edit_pen.svg" alt="">
                    </div>
                    <div class="flex gap-x-16">
                        <div class="flex gap-x-3.5 items-center">
                            <div class="w-4 h-4 rounded-full bg-lime-500"></div>
                            <span>1-10</span>
                        </div>
                        <div class="flex gap-x-3.5 items-center">
                            <div class="w-4 h-4 rounded-full bg-lime-500"></div>
                            <span>10-20</span>
                        </div>
                        <div class="flex gap-x-3.5 items-center">
                            <div class="w-4 h-4 rounded-full bg-lime-500"></div>
                            <span>20-50</span>
                        </div>
                        <div class="flex gap-x-3.5 items-center">
                            <div class="w-4 h-4 rounded-full bg-lime-500"></div>
                            <span>50+</span>
                        </div>
                    </div>
                    <div class="py-7 flex flex-col gap-y-5 border-t border-zinc-900">
                        <div class="flex justify-between">
                            <h1 class="text-xl">ATS integration</h1>
                            <img src="assets/icons/edit_pen.svg" alt="">
                        </div>
                        <p class="text-base">Successfully integrated with XXXX ATS</p>
                    </div>
                    <div class="py-7 flex flex-col gap-y-2 border-t border-zinc-900">
                        <div class="flex justify-between">
                            <h1 class="text-xl">Delete my account</h1>
                            <img src="assets/icons/edit_pen.svg" alt="">
                        </div>
                        <p class="text-base opacity-50">Permanently delete your account</p>
                        <div class="pb-7">
                            <input class="bg-black" type="checkbox" name="" id="deleteA">
                            <label class="pl-5" for="deleteA">I understand that by deleting my account all data, including
                                application data will be permanently erased and cannot be recovered.
                            </label>
                        </div>
                        <button class="border-2 border-violet-700 rounded w-52 py-5">Delete My Account</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="bg-zinc-900 mt-36 h-36 flex justify-end items-center px-32">
        <div class="flex items-center gap-7">
            <button class="border-2 border-violet-700 rounded px-7 py-5">Cancel</button>
            <button class="px-7 py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Save
                Changes</button>
        </div>
    </div>
</body>

</html>