<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
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
        <div class="pb-10 border-b-2 border-stone-800">
            <h2 class="text-xl">Cotswold AUDI</h2>
            <h1 class="text-3xl pt-3">upload a video</h1>
        </div>
    </div>
    <form action="<?= site_url('seesy/videostore') ?>" method="POST" enctype="multipart/form-data">
        <div class="px-32 m-auto pt-24">
            <div class="pb-9">
                <h2 class="text-lg pb-0.5">From your device</h2>
                <h5 class="opacity-50">Max file size 3MB</h5>
                <div class="mt-8">
                    <label for="chooseFile" class="py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 cursor-pointer px-7">Choose
                        File
                        <input id="chooseFile" name="companyVideo" type="file" class="hidden">
                    </label>
                </div>
            </div>

            <div class="py-9 border-t-2 border-stone-900">
                <h2 class="text-lg pb-0.5">From Youtube</h2>
                <h5 class="opacity-50 pb-5">Embed a video from your Youtube account</h5>
                <textarea class="outline-none px-6 py-3.5 text-black" name="" id="" cols="75" rows="5" placeholder="Youtube embed code"></textarea>
            </div>

            <div class="pt-9 border-t-2 border-stone-900">
                <h2 class="text-lg pb-0.5">From Vimeo</h2>
                <h5 class="opacity-50 pb-5">Embed a video from your Vimeo account</h5>
                <textarea class="outline-none px-6 py-3.5 text-black" name="" id="" cols="75" rows="5" placeholder="Vimeo embed code"></textarea>
            </div>
        </div>
        <div class="bg-zinc-900 mt-36 h-36 flex justify-end items-center px-32">
            <button class="px-7 py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Continue
            </button>
        </div>
    </form>
</body>

</html>