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
<body class="flex h-screen w-screen flex-row justify-center align-middle">
<div class="flex flex-1 flex-col justify-center align-middle">
    <div class="mx-auto border-b-2 border-solid border-black pr-4 pb-2 pl-4">
        <div class="text-4xl font-bold">
            Suzanne
        </div>
        <div class="before:m-4 text-4xl font-bold">
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
    <nav class="flex flex-col justify-center text-center align-middle font-sans text-2xl">
        <div class="mx-auto flex flex-col  [&>a]:pb-4 [&>a]:pt-4 [&>a]:underline">
            <a href="./contact" class="transition hover:-translate-y-1 hover:scale-110">Contact</a>
            <a href="./pricing" class="transition hover:-translate-y-1 hover:scale-110">Tarieven</a>
            <a href="./about" class="transition hover:-translate-y-1 hover:scale-110">Over Mij</a>
            <a href="./lesson" class="transition hover:-translate-y-1 hover:scale-110">Lessen</a>
        </div>
    </nav>
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
</body>
</html>