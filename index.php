<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piano Site</title>
    <link rel="stylesheet" href="output.css">
    <script src="live.js"></script>
    <script src="localise.js" defer></script>
</head>
<body class="bg-slate-200 h-screen">
<?php include "nav.php" ?>
<main class="flex h-full flex-col">
    <div class="flex flex-1 flex-col justify-center align-middle">
        <div class="mx-auto border-b-2 border-solid border-black pr-4 pb-2 pl-4">
            <div class="text-8xl font-bold">
                Suzanne
            </div>
            <div class="before:m-8 text-8xl font-bold">
                Spanjaard
            </div>
            <div class="italic pt-4">
                Piano Docent in Veldhoven
            </div>
        </div>

        <div class="lg:hidden flex flex-col justify-center text-center align-middle font-sans">
            <div class="[&>p]:p-4 flex flex-col">
                <p data-lang="intro1"></p>
            </div>
        </div>
    </div>
    <div class="hidden flex-1 text-center lg:flex">
        <div class="flex flex-col justify-center align-middle">
            <div class="mx-auto w-1/2 text-left [&>p]:p-1">
                <h2 class="p-1 text-2xl font-bold">De Piano</h2>
                <p class="border-t-2 border-black border-solid" data-lang="intro1"></p>
                <p data-lang="intro2"></p>
                <p data-lang="intro3"></p>
            </div>
        </div>
    </div>
</main>
</body>
</html>