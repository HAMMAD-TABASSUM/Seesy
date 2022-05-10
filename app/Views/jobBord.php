<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Bord</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.1.1/dist/alpine.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>

<body class="background-gradient text-white px-32 m-auto h-screen">
    <header class="flex justify-between py-6">
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
    <div class="py-12 flex flex justify-between items-center border-b-2 border-stone-800">
        <h2 class="text-3xl">JOB BOARD</h2>
        <div class="bg-zinc-800 py-1 px-7 flex items-center rounded-3xl w-96">
            <input class="bg-zinc-800 outline-none text-white w-full" type="text" placeholder="Search">
            <img class="w-8 h-8" src="<?php echo base_url('assets/icons/Search.svg'); ?>" alt="">
        </div>
        <div class="bg-zinc-800 rounded px-6 py-3">
            <select class="bg-zinc-800 rounded outline-none pr-16" name="cars" id="cars">
                <option value="volvo">Sort by date</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>
        </div>
    </div>
    <h1 class="text-5xl font-bold pt-14">Latest Vacancies</h1>
    <div class="grid grid-cols-4 gap-y-12 gap-x-5 pt-24">
        <?php foreach ($vacancy as $Key => $value) { ?>
            <div>
                <a href="<?= site_url('seesy/get/' . $value['id']) ?>">
                    <img class="inner-container h-64 rounded" src="<?php echo base_url('assets/images/record-intro-video.png'); ?>" alt="">
                    <h3 class="pt-4 pb-1"><?= $value['title']; ?></h3>
                    <h4 class="text-lime-500">00:02:15</h4>
                </a>
            </div>
        <?php } ?>
    </div>
</body>

</html>