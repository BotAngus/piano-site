<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="live.js"></script>
    <script src="localise.js" defer></script>
    <link rel="stylesheet" href="output.css">
    <title>Piano Site</title>
</head>
<body class="bg-slate-200 h-screen w-screen">
<?php include "nav.php" ?>
<main class="flex flex-row justify-center align-middle h-auto">
    <div class="flex flex-col h-full">
        <div>
            <div class="text-4xl m-4 font-bold text-center">Contact</div>
            <div class="flex flex-row justify-center">
                <div class="p-4 flex flex-row">
                    <div class="flex flex-col align-middle justify-center pr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                    </div>
                    <a href="https://maps.google.nl/maps?f=q&source=s_q&hl=nl&geocode=&q=Zuringbeek+5,+5501+Veldhoven&sll=52.469397,5.509644&sspn=3.842113,10.469971&ie=UTF8&z=16&iwloc=A"
                       target="_blank">
                        <div class="flex flex-col shadow-gray-300 bg-gray-100 p-2 rounded">
                            <div>
                                Zuringbeek 5
                            </div>
                            <div>
                                5501BE Veldhoven
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-4 flex flex-row lg:justify-center">
                    <div class="flex flex-col justify-center align-middle pr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                    </div>
                    <div class="shadow-gray-300 bg-gray-100 p-2 rounded flex flex-col justify-center">
                        040 - 202 40 95
                    </div>
                </div>
            </div>
            <div class="m-4">
                <span class="text-2xl font-bold p-4">Stuur een email!</span>
                <form class="mb-4 rounded bg-white px-8 pt-6 pb-8 shadow-md">
                    <div>
                        <div class="lg:flex lg:flex-row">
                            <div class="mb-4 mr-4">
                                <label class="mb-2 block text-sm font-bold text-gray-700" for="name">Naam</label>
                                <input class="w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:shadow-outline focus:outline-none"
                                       id="name" type="text" placeholder="Naam"/>
                            </div>
                            <div class="mb-4 mr-4">
                                <label class="mb-2 block text-sm font-bold text-gray-700" for="email">E-mail</label>
                                <input class="w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:shadow-outline focus:outline-none"
                                       id="email" placeholder="mail@example.com"/>
                            </div>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-bold text-gray-700" for="content">Bericht</label>
                            <textarea
                                    class="w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:shadow-outline focus:outline-none"
                                    id="content"></textarea>
                        </div>
                        <div class="flex justify-between align-middle">
                            <button class="mt-2 rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-800 focus:shadow-outline focus:outline-none"
                                    type="button">Versturen!
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>