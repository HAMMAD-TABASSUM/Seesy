<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Video</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body class="black text-white">
    <header class="flex justify-between py-6 px-32 m-auto">
        <div>
            <img src="assets/icons/logo.svg" alt="">
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
            <img class="w-4" src="<?php echo base_url('assets/icons/settings.svg'); ?>" alt="">
            <img class="w-4" src="<?php echo base_url('assets/icons/user.svg'); ?>" alt="">
        </div>
    </header>
    <div class="relative">
        <img class="w-screen h-screen" src="assets/images/record-intro-video.png" alt="">
        <div class="opacity w-14 h-14 flex justify-center items-center absolute top-0 right-0 mr-32 mt-11">X</div>
    </div>
    <div class="opacity py-9 w-full flex justify-between items-center px-32 absolute -bottom-24">
        <div>
            <span class="inline-block w-2.5 h-2.5 bg-red-500 rounded-full"></span><span class="pl-5">00:00:00</span>
        </div>
        <div class="flex items-center gap-7">
            <a class="border-2 border-violet-500 rounded px-7 py-5" href="recordVideo.php">Stop Recording</a>
            <button class="px-7 py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Start
                Recording</button>
        </div>
    </div>
</body>

</html>