<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard vacancy</title>
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
        <div class="flex gap-x-8 items-center">
            <a href="messages">
                <img class="w-4" src="<?php echo base_url('assets/icons/chat.svg'); ?>" alt="">
            </a>
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
        <div class="pb-10">
            <h2 class="text-xl">Cotswold AUDI</h2>
            <div class="flex justify-between">
                <h1 class="text-3xl pt-3">DIGITAL ENVIRONMENT ARCHITECT</h1>
                <div class="flex gap-x-5">
                    <button class="border-2 border-violet-700 rounded px-7 py-5">View Vacancy</button>
                    <button class="border-2 border-violet-700 rounded px-7 py-5">
                        <img src="<?php echo base_url('assets/icons/Share.svg'); ?>" alt="">
                    </button>
                    <button class="border-2 border-violet-700 rounded px-7 py-5">
                        <img src="<?php echo base_url('assets/icons/Hide.svg'); ?>" alt="">
                    </button>
                </div>
            </div>
        </div>
        <div class="flex gap-x-14">
            <a class="text-xl" href="<?php echo base_url('seesy/dashbord'); ?>">Candidates</a>
            <a class="opacity-50 text-xl" href="<?php echo base_url('seesy/interViewVideos'); ?>">Interview Videos</a>
        </div>
        <div class="pt-24">
            <div class="grid grid-cols-4 gap-5">
                <?php foreach ($vacancy as $Key => $value) { ?>
                    <?php foreach ($users as $Key => $values) { ?>
                        <div class="w-96 p-7 bg-zinc-900 rounded">
                            <a href="<?= site_url('seesy/getProfile/' . $value['id']) ?>">
                                <div class="flex justify-between">
                                    <div class="flex gap-x-1.5 items-center">
                                        <div class="w-4 h-4 bg-zinc-700 rounded-full"></div>
                                        <span class="opacity-50">Compare</span>
                                    </div>
                                    <div>
                                        <img src="<?php echo base_url('assets/icons/Close.svg'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="flex justify-center pt-5">
                                    <img class="w-32 h-32 rounded-full" src="<?php echo base_url('uploads/' . $values['companyLogo']); ?>" alt="">
                                    <!-- <img class=" rounded-full" src="<?php echo base_url('assets/images/record-intro-video.png'); ?>" alt=""> -->
                                </div>
                                <h1 class="text-center pt-5">Philip Anselmo</h1>
                                <div class="flex justify-center pt-5">
                                    <div class="five-star"></div>
                                    <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                                    <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                                    <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                                    <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                                    <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                                </div>
                                <div class="pt-5">
                                    <div class="border-t border-zinc-700 py-5 flex flex-col gap-y-2.5">
                                        <div class="flex justify-between">
                                            <p class="opacity-50">Contract type</p>
                                            <p>Perm / Part time</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="opacity-50">Location</p>
                                            <p><?= $values['location'] ?></p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="opacity-50">Tel / Mob</p>
                                            <p>07891 349 221</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="opacity-50">Email</p>
                                            <p><?= $values['email'] ?></p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="opacity-50">Candidate ref</p>
                                            <p>PA1234</p>
                                        </div>
                                    </div>
                                    <div class="border-t border-zinc-700 pt-5 flex flex-col gap-y-2.5">
                                        <h1 class="pb-5">Skills</h1>
                                        <div class="flex gap-4 w-96 flex-wrap">
                                            <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2"><?= $value['skills'] ?></span>
                                            <!-- <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill2</span>
                                    <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill3</span>
                                    <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill4</span> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
                <!--<div class="w-96 p-7 bg-zinc-900 rounded">
                    <div class="flex justify-between">
                        <div class="flex gap-x-1.5 items-center">
                            <div class="w-4 h-4 bg-zinc-700 rounded-full"></div>
                            <span class="opacity-50">Compare</span>
                        </div>
                        <div>
                            <img src="assets/icons/Close.svg" alt="">
                        </div>
                    </div>
                    <div class="flex justify-center pt-5">
                        <img class="w-32 h-32 rounded-full" src="assets/images/record-intro-video.png" alt="">
                    </div>
                    <h1 class="text-center pt-5">Philip Anselmo</h1>
                    <div class="flex justify-center pt-5">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/black-star.svg" alt="">
                    </div>
                    <div class="pt-5">
                        <div class="border-t border-zinc-700 py-5 flex flex-col gap-y-2.5">
                            <div class="flex justify-between">
                                <p class="opacity-50">Contract type</p>
                                <p>Perm / Part time</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Location</p>
                                <p>Tewkesbury, UK</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Tel / Mob</p>
                                <p>07891 349 221</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Email</p>
                                <p>phil@gmail.com</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Candidate ref</p>
                                <p>PA1234</p>
                            </div>
                        </div>
                        <div class="border-t border-zinc-700 pt-5 flex flex-col gap-y-2.5">
                            <h1 class="pb-5">Skills</h1>
                            <div class="flex gap-4 w-96 flex-wrap">
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill1</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill2</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill3</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-96 p-7 bg-zinc-900 rounded">
                    <div class="flex justify-between">
                        <div class="flex gap-x-1.5 items-center">
                            <div class="w-4 h-4 bg-zinc-700 rounded-full"></div>
                            <span class="opacity-50">Compare</span>
                        </div>
                        <div>
                            <img src="assets/icons/Close.svg" alt="">
                        </div>
                    </div>
                    <div class="flex justify-center pt-5">
                        <img class="w-32 h-32 rounded-full" src="assets/images/record-intro-video.png" alt="">
                    </div>
                    <h1 class="text-center pt-5">Philip Anselmo</h1>
                    <div class="flex justify-center pt-5">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/black-star.svg" alt="">
                    </div>
                    <div class="pt-5">
                        <div class="border-t border-zinc-700 py-5 flex flex-col gap-y-2.5">
                            <div class="flex justify-between">
                                <p class="opacity-50">Contract type</p>
                                <p>Perm / Part time</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Location</p>
                                <p>Tewkesbury, UK</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Tel / Mob</p>
                                <p>07891 349 221</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Email</p>
                                <p>phil@gmail.com</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Candidate ref</p>
                                <p>PA1234</p>
                            </div>
                        </div>
                        <div class="border-t border-zinc-700 pt-5 flex flex-col gap-y-2.5">
                            <h1 class="pb-5">Skills</h1>
                            <div class="flex gap-4 w-96 flex-wrap">
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill1</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill2</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill3</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-96 p-7 bg-zinc-900 rounded">
                    <div class="flex justify-between">
                        <div class="flex gap-x-1.5 items-center">
                            <div class="w-4 h-4 bg-zinc-700 rounded-full"></div>
                            <span class="opacity-50">Compare</span>
                        </div>
                        <div>
                            <img src="assets/icons/Close.svg" alt="">
                        </div>
                    </div>
                    <div class="flex justify-center pt-5">
                        <img class="w-32 h-32 rounded-full" src="assets/images/record-intro-video.png" alt="">
                    </div>
                    <h1 class="text-center pt-5">Philip Anselmo</h1>
                    <div class="flex justify-center pt-5">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/black-star.svg" alt="">
                    </div>
                    <div class="pt-5">
                        <div class="border-t border-zinc-700 py-5 flex flex-col gap-y-2.5">
                            <div class="flex justify-between">
                                <p class="opacity-50">Contract type</p>
                                <p>Perm / Part time</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Location</p>
                                <p>Tewkesbury, UK</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Tel / Mob</p>
                                <p>07891 349 221</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Email</p>
                                <p>phil@gmail.com</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Candidate ref</p>
                                <p>PA1234</p>
                            </div>
                        </div>
                        <div class="border-t border-zinc-700 pt-5 flex flex-col gap-y-2.5">
                            <h1 class="pb-5">Skills</h1>
                            <div class="flex gap-4 w-96 flex-wrap">
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill1</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill2</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill3</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-96 p-7 bg-zinc-900 rounded">
                    <div class="flex justify-between">
                        <div class="flex gap-x-1.5 items-center">
                            <div class="w-4 h-4 bg-zinc-700 rounded-full"></div>
                            <span class="opacity-50">Compare</span>
                        </div>
                        <div>
                            <img src="assets/icons/Close.svg" alt="">
                        </div>
                    </div>
                    <div class="flex justify-center pt-5">
                        <img class="w-32 h-32 rounded-full" src="assets/images/record-intro-video.png" alt="">
                    </div>
                    <h1 class="text-center pt-5">Philip Anselmo</h1>
                    <div class="flex justify-center pt-5">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/black-star.svg" alt="">
                    </div>
                    <div class="pt-5">
                        <div class="border-t border-zinc-700 py-5 flex flex-col gap-y-2.5">
                            <div class="flex justify-between">
                                <p class="opacity-50">Contract type</p>
                                <p>Perm / Part time</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Location</p>
                                <p>Tewkesbury, UK</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Tel / Mob</p>
                                <p>07891 349 221</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Email</p>
                                <p>phil@gmail.com</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Candidate ref</p>
                                <p>PA1234</p>
                            </div>
                        </div>
                        <div class="border-t border-zinc-700 pt-5 flex flex-col gap-y-2.5">
                            <h1 class="pb-5">Skills</h1>
                            <div class="flex gap-4 w-96 flex-wrap">
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill1</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill2</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill3</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-96 p-7 bg-zinc-900 rounded">
                    <div class="flex justify-between">
                        <div class="flex gap-x-1.5 items-center">
                            <div class="w-4 h-4 bg-zinc-700 rounded-full"></div>
                            <span class="opacity-50">Compare</span>
                        </div>
                        <div>
                            <img src="assets/icons/Close.svg" alt="">
                        </div>
                    </div>
                    <div class="flex justify-center pt-5">
                        <img class="w-32 h-32 rounded-full" src="assets/images/record-intro-video.png" alt="">
                    </div>
                    <h1 class="text-center pt-5">Philip Anselmo</h1>
                    <div class="flex justify-center pt-5">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/black-star.svg" alt="">
                    </div>
                    <div class="pt-5">
                        <div class="border-t border-zinc-700 py-5 flex flex-col gap-y-2.5">
                            <div class="flex justify-between">
                                <p class="opacity-50">Contract type</p>
                                <p>Perm / Part time</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Location</p>
                                <p>Tewkesbury, UK</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Tel / Mob</p>
                                <p>07891 349 221</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Email</p>
                                <p>phil@gmail.com</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Candidate ref</p>
                                <p>PA1234</p>
                            </div>
                        </div>
                        <div class="border-t border-zinc-700 pt-5 flex flex-col gap-y-2.5">
                            <h1 class="pb-5">Skills</h1>
                            <div class="flex gap-4 w-96 flex-wrap">
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill1</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill2</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill3</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-96 p-7 bg-zinc-900 rounded">
                    <div class="flex justify-between">
                        <div class="flex gap-x-1.5 items-center">
                            <div class="w-4 h-4 bg-zinc-700 rounded-full"></div>
                            <span class="opacity-50">Compare</span>
                        </div>
                        <div>
                            <img src="assets/icons/Close.svg" alt="">
                        </div>
                    </div>
                    <div class="flex justify-center pt-5">
                        <img class="w-32 h-32 rounded-full" src="assets/images/record-intro-video.png" alt="">
                    </div>
                    <h1 class="text-center pt-5">Philip Anselmo</h1>
                    <div class="flex justify-center pt-5">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/black-star.svg" alt="">
                    </div>
                    <div class="pt-5">
                        <div class="border-t border-zinc-700 py-5 flex flex-col gap-y-2.5">
                            <div class="flex justify-between">
                                <p class="opacity-50">Contract type</p>
                                <p>Perm / Part time</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Location</p>
                                <p>Tewkesbury, UK</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Tel / Mob</p>
                                <p>07891 349 221</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Email</p>
                                <p>phil@gmail.com</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Candidate ref</p>
                                <p>PA1234</p>
                            </div>
                        </div>
                        <div class="border-t border-zinc-700 pt-5 flex flex-col gap-y-2.5">
                            <h1 class="pb-5">Skills</h1>
                            <div class="flex gap-4 w-96 flex-wrap">
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill1</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill2</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill3</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-96 p-7 bg-zinc-900 rounded">
                    <div class="flex justify-between">
                        <div class="flex gap-x-1.5 items-center">
                            <div class="w-4 h-4 bg-zinc-700 rounded-full"></div>
                            <span class="opacity-50">Compare</span>
                        </div>
                        <div>
                            <img src="assets/icons/Close.svg" alt="">
                        </div>
                    </div>
                    <div class="flex justify-center pt-5">
                        <img class="w-32 h-32 rounded-full" src="assets/images/record-intro-video.png" alt="">
                    </div>
                    <h1 class="text-center pt-5">Philip Anselmo</h1>
                    <div class="flex justify-center pt-5">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/green-star.svg" alt="">
                        <img src="assets/icons/black-star.svg" alt="">
                    </div>
                    <div class="pt-5">
                        <div class="border-t border-zinc-700 py-5 flex flex-col gap-y-2.5">
                            <div class="flex justify-between">
                                <p class="opacity-50">Contract type</p>
                                <p>Perm / Part time</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Location</p>
                                <p>Tewkesbury, UK</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Tel / Mob</p>
                                <p>07891 349 221</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Email</p>
                                <p>phil@gmail.com</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="opacity-50">Candidate ref</p>
                                <p>PA1234</p>
                            </div>
                        </div>
                        <div class="border-t border-zinc-700 pt-5 flex flex-col gap-y-2.5">
                            <h1 class="pb-5">Skills</h1>
                            <div class="flex gap-4 w-96 flex-wrap">
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill1</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill2</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill3</span>
                                <span class="green text-black rounded-3xl pl-3.5 pr-9 py-2">Skill4</span>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>