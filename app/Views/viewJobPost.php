<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Job Post</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.1.1/dist/alpine.min.js"></script>
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
                <h1 class="text-4xl font-bold pt-3">Digital Environment Architect</h1>
                <h2 class="text-xl opacity-50"><?= $vacancy['salaryFrom']; ?> - <?= $vacancy['salaryTo']; ?> Per Annum</h2>
            </div>
            <div class="flex gap-x-11 items-center">
                <img class="w-6 h-6" src="<?php echo base_url('assets/icons/Heart.svg'); ?>" alt="">
                <button class="py-5 px-7 flex items-center mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 rounded">
                    <img class="pr-5" src="<?php echo base_url('assets/icons/live-video-on.svg'); ?>" alt="">
                    Quick Apply
                </button>
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
                    <span><?= $vacancy['location']; ?></span>
                </div>
                <div class="flex justify-between border-t border-stone-900 pt-3.5">
                    <span class="opacity-50">Remote working</span>
                    <span>Flexible</span>
                </div>
            </div>
            <h1 class="pt-20 pb-5">Tags</h1>
            <div class="flex gap-4 w-96 flex-wrap">
                <span class="green text-black rounded-3xl px-3.5 py-2"><?= $vacancy['tags']; ?></span>
                <!-- <span class="green text-black rounded-3xl px-3.5 py-2">Label</span>
                    <span class="green text-black rounded-3xl px-3.5 py-2">Label</span>
                    <span class="green text-black rounded-3xl px-3.5 py-2">Label</span>
                    <span class="green text-black rounded-3xl px-3.5 py-2">Label</span>
                    <span class="green text-black rounded-3xl px-3.5 py-2">Label</span>
                    <span class="green text-black rounded-3xl px-3.5 py-2">Label</span>
                    <span class="green text-black rounded-3xl px-3.5 py-2">Label</span>
                    <span class="green text-black rounded-3xl px-3.5 py-2">Label</span>
                    <span class="green text-black rounded-3xl px-3.5 py-2">Label</span>
                    <span class="green text-black rounded-3xl px-3.5 py-2">Label</span> -->
            </div>
        </div>
        <div class="w-full">
            <div class="relative">
                <video class="rounded h-1/2 w-full" controls src="<?php echo base_url('assets/images/video.mkv'); ?>"></video>
                <!-- <img class="h-1/2 w-full" src="assets/images/record-intro-video.png" alt=""> -->
                <div class="opacity w-14 h-14 flex justify-center items-center absolute bottom-0 right-0 mr-7 mb-7">
                    <img src="assets/icons/play-button.svg" alt="">
                </div>
            </div>
            <div class="p-7 bg-zinc-900 mt-20 mb-12 rounded">
                <h1 class="pb-16">Vacancy Description</h1>
                <p><?= $vacancy['title']; ?></p>
            </div>

            <div class="pt-20 border-t-2 border-stone-800">
                <h1 class="pb-5">Questions from this employer</h1>
                <div class="">
                    <div class=" flex flex-col gap-y-3">
                        <h2 class="text-base mahroon w-full px-7 py-4 rounded mb-5"><?= $vacancy['QuestionsForCandidates']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>