<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Apply</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>

<body class="background-gradient text-white">
    <header class="flex justify-between py-6 px-32 m-auto">
        <div>
            <img src="<?php echo base_url('assets/icons/logo.svg'); ?>" alt="">
        </div>
        <nav class="flex gap-x-9">
            <a href="">Item First</a>
            <a href="">Item Two</a>
            <a href="">Item Three</a>
            <a href="">Item Four</a>
            <a href="">Item Five</a>
        </nav>
        <div class="flex gap-x-8">
            <img class="w-4" src="<?php echo base_url('assets/icons/chat.svg'); ?>" alt="">
            <img class="w-4" src="<?php echo base_url('assets/icons/alert.svg'); ?>" alt="">
            <div class="">
                <div x-data="{ open: false }" class="relative">
                    <button x-on:click="open = true" class="flex items-center focus:bg-violet-600 focus:outline-none py-2.5 px-3.5 rounded-t" type="button">
                        <img class="w-4" src="<?php echo base_url('assets/icons/settings.svg'); ?>" alt="">
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
            <img class="w-4" src="<?php echo base_url('assets/icons/user.svg'); ?>" alt="">
        </div>
    </header>
    <div class="pt-6 px-32 m-auto ">
        <div class="flex justify-between pb-10 border-b-2 border-stone-800">
            <div class="">
                <h1 class="text-4xl font-bold pt-3"><span class="opacity-50">Apply:</span>Digital Environment Architect
                </h1>
                <h2 class="text-xl opacity-50 pt-1">Complete the details below to apply for this role</h2>
            </div>
            <div>
                <a class="py-5 px-7 flex items-center mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 rounded" href="<?= site_url('seesy/jobbord'); ?>">Back to Job Post</a>
            </div>
        </div>
    </div>
    <div class="pt-10 px-32 m-auto flex gap-x-96">
        <div class="w-96">
            <h1>Details</h1>
            <div class="pt-5 flex flex-col gap-y-7">
                <div class="flex justify-between">
                    <span class="opacity-50">Job reference</span>
                    <span>seesy1234</span>
                </div>
                <div class="flex justify-between border-t border-stone-800 pt-3.5">
                    <span class="opacity-50">Contract type</span>
                    <span>Permanent</span>
                </div>
                <div class="flex justify-between border-t border-stone-800 pt-3.5">
                    <span class="opacity-50">Location</span>
                    <span>Cheltenham, UK</span>
                </div>
                <div class="flex justify-between border-t border-stone-800 pt-3.5">
                    <span class="opacity-50">Remote working</span>
                    <span>Flexible</span>
                </div>
            </div>
        </div>
        <div class="w-full">
            <h1 class="pb-16">My Profile Video</h1>
            <div class="border-b border-stone-800">
                <video class="h-96 rounded w-full" controls src="<?php echo base_url('assets/images/video.mkv'); ?>"></video>
                <!-- <img class=" w-full" src="assets/images/record-intro-video.png" alt=""> -->
                <div class="flex items-center pb-10 pt-4 gap-x-4">
                    <button class="border-2 border-violet-500 rounded px-7 py-5">Record New Video</button>
                    <button class="px-7 py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Choose
                        Video</button>
                </div>
            </div>
            <h2 class="text-lg py-5">Employer Questions</h2>
            <div class="flex flex-col gap-y-10">
                <div>
                    <h5 class="opacity-50 pb-5">1. How many years experience do you have in sales or new business
                        development?</h5>
                    <textarea class="outline-none px-6 py-3.5 text-black" name="" id="" cols="50" rows="3" placeholder="Label"></textarea>
                </div>


            </div>
        </div>
    </div>
    <div class="light-mahroon mt-36 h-36 flex justify-between items-center px-32"></div>
</body>

</html>