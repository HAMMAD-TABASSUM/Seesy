<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Company</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>

<body class="black text-white">
    <header class="flex justify-between py-6 px-32 m-auto ">
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
            <img class="w-4" src="<?php echo base_url('assets/icons/settings.svg'); ?>" alt="">
            <img class="w-4" src="<?php echo base_url('assets/icons/user.svg'); ?>" alt="">
        </div>
    </header>

    <div class="pt-6 px-32 m-auto ">
        <div class="pb-10 border-b-2 border-stone-700">
            <h2 class="text-xl">Cotswold AUDI</h2>
            <h1 class="text-3xl pt-3">ABOUT YOUR COMPANY</h1>
        </div>
    </div>
    <form action="<?= site_url('seesy/store') ?>" method="POST" enctype="multipart/form-data">

        <div class="px-32 m-auto">
            <div class="pt-24 pb-5">
                <textarea class="outline-none px-6 py-3.5 text-black" name="description" id="" cols="75" rows="5" placeholder="Your description"></textarea>
            </div>

            <div class="py-9 border-t-2 border-stone-800">
                <h2 class="text-lg pb-0.5">Your logo</h2>
                <h5 class="opacity-50">Upload your company logo (PNG, JPG or SVG)</h5>
                <div class="mt-8">
                    <label for="chooseFile" class="py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 cursor-pointer px-7">Choose
                        File
                        <input id="chooseFile" type="file" class="hidden" name="companyLogo">
                    </label>
                </div>
            </div>
            <div class="py-5 border-tp-2 border-stone-800">
                <h2 class="text-lg pb-0.5">Primary Location</h2>
                <h5 class="opacity-50 pb-7">Your main office / headquarters</h5>
                <input class="w-96 py-4 px-6 rounded outline-none text-black" name="location" type="text" placeholder="Add your address">
                <div class="flex items-center pt-7 gap-x-5">
                    <img class="w-7 h-7" src="<?php echo base_url('assets/icons/Union.svg'); ?>" alt="">
                    <span>Add another location</span>
                </div>
            </div>
            <div class="py-5 border-t-2 border-stone-800">
                <h2 class="text-lg pb-0.5">Company Size</h2>
                <h5 class="opacity-50 pb-7">How many people work at your company?</h5>
                <div class="flex gap-x-16">
                    <div class="flex items-center gap-x-3.5">
                        <input class="w-4 h-4" type="radio" id="member10" value="1-10" name="member">
                        <label for="member10">1-10</label>
                    </div>
                    <div class="flex items-center gap-x-3.5">
                        <input class="w-4 h-4" type="radio" id="member20" value="10-20" name="member">
                        <label for="member20">10-20</label>
                    </div>
                    <div class="flex items-center gap-x-3.5">
                        <input class="w-4 h-4" type="radio" id="member50" value="20-50" name="member">
                        <label for="member50">20-50</label>
                    </div>
                    <div class="flex items-center gap-x-3.5">
                        <input class="w-4 h-4" type="radio" id="member50+" value="50+" name="member">
                        <label for="member50+">50+</label>
                    </div>
                </div>
            </div>
            <div class="py-5 border-t-2 border-stone-800">
                <h2 class="text-lg pb-0.5">Integrate ATS</h2>
                <h5 class="opacity-50 pb-7">Use Seesy with your applicant tracking system</h5>
                <label class="inline-block relative dropdown">

                    <div class="dd-button px-6 pr-72 py-4 bg-white cursor-pointer rounded inline-block text-black">
                        Select ATS
                    </div>

                    <input type="checkbox" class="dd-input" id="test">

                    <ul class="dd-menu absolute top-full rounded mt-0.5 bg-white text-black p-4 w-96">
                        <li>Action</li>
                        <li>Another action</li>
                        <li>Something else here</li>
                    </ul>

                </label>
            </div>
        </div>
        <div class="bg-zinc-900 mt-36 h-36 flex justify-between items-center px-32">
            <div class=" flex gap-x-2 items-center">
                <span class="text-xl">Record or upload an intro video</span>
                <span class="opacity-50">Max file size 3MB</span>
            </div>
            <div class="flex items-center gap-7">
                <a class="border-2 border-violet-500 rounded px-7 py-5" href="recordIntroVideo.php">Use your computer camera</a>
                <button class="px-7 py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Upload
                    a video</button>
            </div>
        </div>
    </form>
</body>

</html>