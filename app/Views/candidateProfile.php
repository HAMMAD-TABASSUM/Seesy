<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Profile</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.1.1/dist/alpine.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>

<body class="black text-white">
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
                            <a href="manageProfile.php" class="block hover:bg-violet-500 rounded-3xl text-white whitespace-no-wrap py-2 px-4">
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
        <div class="pb-10 border-b-2 border-stone-800">
            <h2 class="text-xl">Cotswold AUDI</h2>
            <div class="flex justify-between">
                <div class="flex gap-x-7 items-center">
                    <h1 class="text-3xl pt-3">PHILIP ANSELMO</h1>
                    <div class="flex justify-center pt-5">
                        <div class="five-star"></div>
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                    </div>
                </div>
                <div class="flex items-center gap-x-5">
                    <button class="text-white bg-zinc-900 pr-14 pl-4 rounded py-4">
                        <span class="pr-2">X</span>
                        Reject
                    </button>
                    <button class="text-white bg-zinc-900 rounded p-4">
                        <img src="<?php echo base_url('assets/icons/Note.svg'); ?>" alt="">
                    </button>
                    <button class="text-white bg-zinc-900 rounded p-4">
                        <img src="<?php echo base_url('assets/icons/Heart.svg'); ?>" alt="">
                    </button>
                    <button class="text-white bg-zinc-900 rounded p-4">
                        <img src="<?php echo base_url('assets/icons/Share.svg'); ?>" alt="">
                    </button>
                    <button class="text-white bg-zinc-900 rounded p-4 bg-violet-700 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
                        <img src="<?php echo base_url('assets/icons/Calendar.svg'); ?>" alt="">
                    </button>
                    <button class="text-white bg-zinc-900 rounded p-4 bg-violet-700 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
                        <img src="<?php echo base_url('assets/icons/live-video-on.svg'); ?>" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-24 px-32 m-auto flex gap-x-40">
        <div class="w-96">
            <img src="<?php echo base_url('assets/icons/evitar.svg'); ?>" alt="">
            <h1 class="pt-12">Details</h1>
            <div class="pt-5 flex flex-col gap-y-7">
                <div class="flex justify-between">
                    <span class="opacity-50">Job reference</span>
                    <span>seesy1234</span>
                </div>
                <div class="flex justify-between border-t border-stone-900 pt-3.5">
                    <span class="opacity-50">Contract type</span>
                    <span>Permanent</span>
                </div>
                <div class="flex justify-between border-t border-stone-900 pt-3.5">
                    <span class="opacity-50">Location</span>
                    <span>lahore p</span>
                </div>
                <div class="flex justify-between border-t border-stone-900 pt-3.5">
                    <span class="opacity-50">Remote working</span>
                    <span>Flexible</span>
                </div>
            </div>
            <h1 class="pt-20 pb-5">Tags</h1>
            <div class="flex gap-4 w-96 flex-wrap">
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2"><?= $candidate['skills']; ?></span>
                <!-- <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span>
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span>
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span>
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span>
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span>
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span>
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span>
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span>
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span>
                <span class="bg-lime-500 text-black rounded-3xl px-3.5 py-2">Label</span> -->
            </div>
        </div>
        <div class="w-full">
            <div class="relative">
                <div class="pb-5 flex justify-between">
                    <h1 class="pb-5 text-xl">Intro Video</h1>
                    <div>
                        <span class="opacity-50 pr-1">Candidate ref</span>
                        <span>12345</span>
                    </div>
                </div>
                <video class="h-1/2 w-full" controls src="<?php echo base_url('assets/images/video.mkv'); ?>"></video>
                <!-- <img class="h-1/2 w-full" src="assets/images/record-intro-video.png" alt=""> -->
                <div class="opacity w-14 h-14 flex justify-center items-center absolute bottom-0 right-0 mr-7 mb-7">
                    <img src="assets/icons/play-button.svg" alt="">
                </div>
            </div>
            <div class="p-7 bg-zinc-900 mt-20 rounded ">
                <h1 class="pb-16 text-lg">About Philip</h1>
                <p><?= $candidate['about']; ?></p>
            </div>
            <div class="pt-7 pb-11">
                <div class="p-7 bg-zinc-900 rounded">
                    <h1 class="">Work History</h1>
                </div>
                <h1 class="pt-12 pb-7 text-lg">Files</h1>
                <div class="flex gap-x-11">
                    <img src="<?php echo base_url('assets/icons/Document.svg'); ?>" alt="">
                    <img src="<?php echo base_url('assets/icons/Document.svg'); ?>" alt="">
                </div>
            </div>
            <div class="border-t border-stone-900">
                <!--<h1 class="pt-11 pb-7 text-lg">Notes</h1>
                 <div class="flex flex-col gap-y-5">
                    <div class="p-10 bg-zinc-900 rounded">
                        <div class="flex items-center gap-x-5">
                            <div>
                                <img class="w-14 h-14 rounded-full" src="assets/images/record-intro-video.png" alt="">
                            </div>
                            <div>
                                <h1>James Holmes </h1>
                                <h1 class="opacity-50">Added 25/12/2021</h1>
                            </div>
                        </div>
                        <p class="pt-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                    <div class="p-10 bg-zinc-900 rounded">
                        <div class="flex items-center gap-x-5">
                            <div>
                                <img class="w-14 h-14 rounded-full" src="assets/images/record-intro-video.png" alt="">
                            </div>
                            <div>
                                <h1>James Holmes </h1>
                                <h1 class="opacity-50">Added 25/12/2021</h1>
                            </div>
                        </div>
                        <p class="pt-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="bg-zinc-900 mt-36 h-36 flex justify-end items-center px-32">
        <div class="flex items-center gap-7">
            <a class="border-2 border-violet-700 rounded px-7 py-5" href="<?php echo base_url('seesy/dashbord'); ?>">Back To Candidates</a>
            <button class="px-7 py-5 rounded bg-violet-700 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Schedule
                Interview</button>
        </div>
    </div>
</body>

</html>