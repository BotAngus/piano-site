<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piano Site</title>
    <link rel="stylesheet" href="style.css">
    <script src="localise.js"></script>
    <style>
        .landing-page {
            display: flex;
            flex-direction: column;
        }

        .name-pretty > div {
            text-shadow: 5px 5px var(--highlight);
            font-size: 8vw;
        }

        .name-pretty {
            margin: auto;
            display: flex;
            flex-direction: column;
        }

        .name-pretty .slight-offset {
            padding-left: 10vw;
        }

        .intro {
            display: flex;
            flex-direction: column;
        }

        .intro-text {
            margin: 0 auto 0 auto;
            padding: 1vw;
            width: 50%;
        }

        .intro-text p {
            padding: 1rem;
        }

        .intro-links {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: auto;
        }


        .intro-links > a {
            text-decoration: underline;
            padding: 0.5rem 1rem 0.5rem 1rem;
            font-size: 1.5vw;
            font-weight: bold;
            box-shadow: inset 0 0 0 0 var(--shadow);
            /*border: 3px solid var(--shadow);*/
            transition: color 1s ease-in-out, box-shadow 0.5s ease-in-out;
        }


        .intro-links > a:hover {
            box-shadow: inset 10em 0 0 0 var(--shadow);
            color: var(--main);
        }


    </style>
</head>
<body>
<?php include "nav.php" ?>
<div class="landing-page">
    <div class="name-pretty">
        <div class="decoration-circle">Suzanne</div>
        <div class="slight-offset">Spanjaard</div>
    </div>
    <div class="intro">
        <div class="intro-text">
            <p data-lang="intro1"></p>
            <p data-lang="intro2"></p>
            <p data-lang="intro3"></p>
        </div>
        <div class="intro-links">
            <a href="/about">
                Over Mij
            </a>
            <a href="/pricing">
                Tarieven
            </a>
            <a href="/contact">
                Contact
            </a>
        </div>
    </div>
</div>
</body>
</html>
