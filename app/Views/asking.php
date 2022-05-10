<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asking Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>

<body class="black text-white">
    <form action="<?= site_url('seesy/asking') ?>" method="POST">
        <div class=" flex justify-center pt-96 gap-x-4">
            <a class="border-2 border-violet-700 rounded px-7 py-5" href="<?= site_url('seesy/aboutCompany'); ?>">HR</a>
            <a class="border-2 border-violet-700 rounded px-7 py-5" href="<?= site_url('seesy/quickApply'); ?>">Candidate</a>
        </div>
    </form>
</body>

</html>