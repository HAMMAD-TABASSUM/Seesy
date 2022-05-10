<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Vacancy</title>
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
    <?php foreach ($vacancy as $Key => $value) { ?>
        <div class="pt-6 px-32 m-auto ">
            <div class="pb-10 border-b-2 border-stone-800">
                <h2 class="text-xl">Cotswold AUDI</h2>
                <div class="flex justify-between">
                    <h1 class="text-3xl pt-3">Digital Environment Architect</h1>
                    <h2 class="text-xl"><?= $value['salaryFrom'] ?> - <?= $value['salaryTo'] ?> </h2>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php foreach ($vacancy as $Key => $value) { ?>
        <?php foreach ($users as $val) { ?>
            <div class="pt-24 px-32 m-auto flex gap-x-40">
                <div class="w-96">
                    <img class="h-52 w-52 rounded-full" src="<?php echo base_url('uploads/' . $val['companyLogo']); ?>" alt="">
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
                            <span><?= $value['location'] ?></span>
                        </div>
                        <div class="flex justify-between border-t border-stone-900 pt-3.5">
                            <span class="opacity-50">Remote working</span>
                            <span>Flexible</span>
                        </div>
                    </div>
                    <h1 class="pt-20 pb-5">Tags</h1>
                    <div class="flex gap-4 w-96 flex-wrap">
                        <span class="green text-black rounded-3xl px-3.5 py-2"><?= $value['tags']; ?></span>
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
                        <video class="h-1/2 w-full" controls src="<?php echo base_url('uploads/' . $val['companyVideo']); ?>"></video>
                        <div class="opacity w-14 h-14 flex justify-center items-center absolute bottom-0 right-0 mr-7 mb-7">
                            <img src="<?php echo base_url('assets/icons/play-button.svg'); ?>" alt="">
                        </div>
                    </div>
                    <div class="p-7 bg-zinc-900 mt-20 rounded ">
                        <h1 class="pb-16">Vacancy Description</h1>
                        <p><?= $value['title']; ?>
                            <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum. -->
                        </p>
                    </div>
                    <div class="pt-7 pb-20">
                        <div class="p-7 bg-zinc-900 rounded">
                            <h1 class="pb-16">Key Benefits</h1>
                            <div class=" flex flex-col gap-y-3">
                                <h2><span class="text-lime-500 pr-2">/</span><?= $value['BenefitsOfWorking']; ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="pt-20 border-t border-stone-900">
                        <h1 class="pb-5">Questions from this employer</h1>
                        <div class="">
                            <div class=" flex flex-col gap-y-3">
                                <h2 class="text-base bg-zinc-900 w-full px-7 py-4 rounded mb-5"><?= $value['QuestionsForCandidates']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
    <div class="bg-zinc-900 mt-36 h-36 flex justify-between items-center px-32">
        <div class=" flex gap-x-2 items-center">
            <span class="opacity-50">Cost to post this role:</span>
            <span class="text-xl">1 Credit (25 credits available)</span>
        </div>
        <div class="flex items-center gap-7">
            <button class="border-2 border-stone-800 rounded px-7 py-5">Edit</button>
            <a class="px-7 py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300" href="<?= site_url('seesy/dashbord'); ?>">Continue</a>
        </div>
    </div>
</body>

</html>