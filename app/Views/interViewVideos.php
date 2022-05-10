<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Videos</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.1.1/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
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
        <div class="pb-10">
            <h2 class="text-xl">Cotswold AUDI</h2>
            <h1 class="text-3xl pt-3">DIGITAL ENVIRONMENT ARCHITECT</h1>
        </div>
        <div class="flex gap-x-14">
            <a class="opacity-50 text-xl" href="<?php echo base_url('seesy/dashbord'); ?>">Candidates</a>
            <a class="text-xl" href="<?php echo base_url('seesy/interViewVideos'); ?>">Interview Videos</a>
        </div>
        <div class="py-28">
            <div class="flex items-center gap-x-6">
                <div>
                    <img class="rounded-full w-16 h-16" src="<?php echo base_url('assets/images/record-intro-video.png'); ?>" alt="">
                </div>
                <div class="flex flex-col">
                    <p>Philip Anselmo</p>
                    <div class="flex">
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                        <img src="<?php echo base_url('assets/icons/green-star.svg'); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="flex gap-5 pt-10 pl-36">
                <div>
                    <video class="h-64 rounded" controls src="<?php echo base_url('assets/images/video.mkv'); ?>"></video>
                    <!-- <img class="h-64 rounded" src="assets/images/record-intro-video.png" alt=""> -->
                    <h1 class="py-5">01 March 2022</h1>
                    <div class="flex items-center gap-x-2.5">
                        <img src="<?php echo base_url('assets/icons/eye.svg'); ?>" alt="">

                        <!-- Button trigger modal -->
                        <button type="button" class="text-white" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Transcript
                        </button>

                        <!-- Modal -->
                        <div class="modal fade fixed top-0 right-0 hidden w-4/5 h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen relative w-auto pointer-events-none">
                                <div class="modal-content border-none shadow-lg relative h-screen pointer-events-auto bg-white bg-clip-padding outline-none text-current">
                                    <div class="flex justify-between m-auto w-4/5 py-5">
                                        <div class="flex gap-x-6 items-center" id="exampleModalFullscreenLabel">
                                            <img class="w-16 h-16 rounded-full" src="<?php echo base_url('assets/images/record-intro-video.png'); ?>" alt="">
                                            <span class="text-xl text-black">Philip Anselmo</span>
                                        </div>
                                        <button type="button" class="btn-close text-black" data-bs-dismiss="modal" aria-label="Close">X
                                        </button>
                                    </div>
                                    <div class="text-black bg-gray-100 h-full">
                                        <div class=" m-auto w-4/5 pt-20">
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <p class="opacity-50">01 March 2022</p>
                                                    <p>TRANSCRIPT</p>
                                                </div>
                                                <div class="flex gap-x-5">
                                                    <button class="p-5 rounded bg-violet-700 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
                                                        <img src="<?php echo base_url('assets/icons/Share.svg'); ?>" alt="">
                                                    </button>
                                                    <button class="p-5 rounded bg-violet-700 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
                                                        <img src="<?php echo base_url('assets/icons/Print.svg'); ?>" alt="">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="pt-24 flex flex-col gap-y-5">
                                                <div class="flex justify-between">
                                                    <div class="px-2.5 flex justify-center items-center bg-gray-900 rounded-full text-white">
                                                        PA
                                                    </div>
                                                    <p class=" ml-20 pr-28">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing
                                                        elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>