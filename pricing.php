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
<body class="bg-slate-200">
<?php include "nav.php" ?>
<main class="flex h-full w-full justify-center">
    <div class="mx-4 mb-4 flex flex-col lg:w-1/2 lg:bg-white lg:p-4 lg:rounded">
        <div class="my-4 [&>p]:mt-4">
            <h1 class="text-left text-4xl font-bold">Tarieven</h1>
            <p>Voor volwassen leerlingen geldt het tarief van de <a class="underline"
                                                                    href="https://www.vrijekntv.nl/tarieven-kntv/"
                                                                    target="_blank">Koninklijke Nederlandse
                    Toonkunstenaars
                    Vereniging</a>.</p>

            <p>Voor kinderen en studenten hanteer ik een lager tarief, ¾ ervan.</p>

            <p>Een proefles – of de eerste les - is gratis.</p>

            <p>Voor het seizoen 2023/2024 is het KNTV tarief € 49,- per uur.</p>

            <table class="my-4 table-auto">
                <tbody>
                <tr>
                    <td>Volwassenen</td>
                    <td>€ 147,- per maand</td>
                </tr>
                <tr>
                    <td>Kinderen en studenten</td>
                    <td>€ 110,- per maand</td>
                </tr>
                </tbody>
            </table>


            <p>
                De lessen worden 10 keer per jaar betaald aan het begin van de maanden september tot en met juni.
                Ik houd de basisschoolvakanties aan (12 vakantieweken); dat betekent dat er per kalenderjaar 40 lessen
                zijn.
            </p>
        </div>

        <div>
            <h1 class="text-left text-4xl font-bold">Lestijden</h1>
            <p class="my-4">Een les duurt 3 kwartier; langer kan ook.
                Ik geef les op alle weekmiddagen en op maandag-, woensdag- en donderdagavond.
                Je kunt op elk moment in het jaar met lessen beginnen.
            </p>


            <table class="table-auto rounded border-2 border-solid border-black [&_td]:border-2 [&_td]:border-solid [&_td]:border-black">
                <caption class="mb-2 text-left text-2xl">Vakanties 2023/2024</caption>
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Periode</th>
                </tr>
                </thead>
                <tbody class="border-2 border-solid border-black">
                <tr>
                    <td>Zomervakantie</td>
                    <td>17 juli tot 28 augustus 2023</td>
                </tr>
                <tr>
                    <td>Herfstvakantie</td>
                    <td>16 t/m 20 oktober 2023</td>
                </tr>
                <tr>
                    <td>Kerstvakantie</td>
                    <td>25 december 2023 t/m 5 januari 2024</td>
                </tr>
                <tr>
                    <td class="whitespace-pre-wrap">Carnavals vakantie</td>
                    <td>12 t/m 16 februari 2024</td>
                </tr>
                <tr>
                    <td> Meivakantie</td>
                    <td>22 april t/m 3 mei 2024</td>
                </tr>
                <tr>
                    <td>Zomervakantie</td>
                    <td>8 juli tot 19 augustus 2024</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
</body>
</html>


