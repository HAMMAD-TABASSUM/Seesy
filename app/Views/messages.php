<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.1.1/dist/alpine.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>

<body class="black text-white">
    <div class="flex">
        <div class="w-96">
            <div class="bg-black px-5 py-6 flex items-center">
                <input class="bg-black outline-none text-white w-full" type="text" placeholder="Search">
                <img class="w-8 h-8" src="<?php echo base_url('assets/icons/Search.svg'); ?>" alt="">
            </div>
            <div class="flex flex-col h-screen justify-between">
                <div class="flex flex-col gap-y-px">
                    <?php foreach ($users as $val) { ?>
                        <div class="flex justify-between items-center bg-white p-5">
                            <div class="flex gap-x-5 items-center">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full" src="<?php echo base_url('uploads/' . $val['companyLogo']); ?>" alt="">
                                    <div class="w-2.5 h-2.5 green rounded-full absolute top-1 right-0"></div>
                                </div>
                                <span class="text-black"><?= $val['name']; ?></span>
                            </div>
                            <div>
                                <img src="<?php echo base_url('assets/icons/Live Video On-voilent.svg'); ?>" alt="">
                            </div>
                        </div>
                    <?php } ?>
                    <!-- <div class="flex gap-x-5 bg-zinc-900 items-center p-5">
                        <div class="relative">
                            <img class="w-12 h-12 rounded-full" src="assets/images/record-intro-video.png" alt="">
                            <div class="w-2.5 h-2.5 green rounded-full absolute top-1 right-0"></div>
                        </div>
                        <span>Phil Anselmo</span>
                    </div>
                    <div class="flex gap-x-5 bg-zinc-900 items-center p-5">
                        <div class="relative">
                            <img class="w-12 h-12 rounded-full" src="assets/images/record-intro-video.png" alt="">
                            <div class="w-2.5 h-2.5 green rounded-full absolute top-1 right-0"></div>
                        </div>
                        <span>Phil Anselmo</span>
                    </div> -->
                </div>
                <button class="py-7 mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Exit
                    Messages
                </button>
            </div>
        </div>
        <div class="w-full">
            <h1 class="text-white px-5 py-7">Digital Environment Architect</h1>
            <div class="bg-zinc-800 pl-36 pr-5 h-screen pt-20 flex justify-between flex-col gap-y-9">
                <div>
                    <?php foreach ($users as $val) { ?>
                        <?php foreach ($chat as $ch) { ?>
                            <div class="flex gap-x-5">
                                <img class="w-12 h-12 rounded-full" src="<?php echo base_url('uploads/' . $val['companyLogo']); ?>" alt="">
                                <div class="green rounded px-7 py-3 relative">
                                    <div class="w-4 h-4 green absolute -left-2 top-4 rotate-45"></div>
                                    <p class="text-black"><?= $ch['message']; ?></p>
                                </div>
                            </div>
                            <div class="flex gap-x-5 justify-end">
                                <div class="bg-zinc-700- rounded px-7 py-3 relative">
                                    <!-- <div class="w-4 h-4 bg-zinc-700 absolute -right-2 top-4 rotate-45"></div> -->
                                    <!-- <p>Hey man, How’s going?</p> -->
                                </div>
                                <!-- <img class="w-12 h-12 rounded-full" src="<?php echo base_url('uploads/' . $val['companyLogo']); ?>" alt=""> -->
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <form class=" flex py-4" action="<?= site_url('seesy/messg') ?>" method="post">
                    <textarea class="rounded px-3 py-4 text-black outline-none font-xl" name="message" cols="130" rows="1" placeholder="Text here"></textarea>
                    <button type="submit" class="px-2 py-1 rounded bg-violet-700 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Send</button>
                </form>
            </div>
        </div>
        <div class="w-96">
            <div class="flex gap-x-8 pt-4 pb-7">
                <img class="w-4" src="<?php echo base_url('assets/icons/Chat-green.svg'); ?>" alt="">
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
            <?php foreach ($users as $val) { ?>
                <img class="w-full h-80" src="<?php echo base_url('uploads/' . $val['companyLogo']); ?>" alt="">
            <?php } ?>
            <h1 class="p-7">Phil Anselmo</h1>
            <div class="flex px-7">
                <img src="assets/icons/green-star.svg" alt="">
                <img src="assets/icons/green-star.svg" alt="">
                <img src="assets/icons/green-star.svg" alt="">
                <img src="assets/icons/green-star.svg" alt="">
                <img src="assets/icons/black-star.svg" alt="">
            </div>
            <h1 class="pt-16 px-7">Details</h1>
            <div class="pt-5 px-7 flex flex-col gap-y-7">
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
                    <span>Cheltenham, UK</span>
                </div>
                <div class="flex justify-between border-t border-stone-900 pt-3.5">
                    <span class="opacity-50">Remote working</span>
                    <span>Flexible</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>