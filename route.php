
<?php

if (!isset($_GET["route"])) {
    die("Page does not exist");
}


require "conn.php";

$statement = $conn->prepare("SELECT title, body FROM pages WHERE route=?");
$statement->bind_param("s", $_GET["route"]);
$statement->bind_result($title, $body);

$statement->execute();

if (!$statement->fetch()) {
    die("Page does not exist");
}
$statement->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="live.js"></script>
    <script src="md.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const converter = new showdown.Converter();
            converter.setOption('parseImgDimensions', true)
            converter.setOption("strikethrough", true)
            converter.setOption("tables", true)
            converter.setOption("simplifiedAutoLink", true)

            const text = `<?php echo $body?>`;
            const html = converter.makeHtml(text);
            document.getElementById("markdown").innerHTML = html;
        })

    </script>
    <title>Over Mijzelf</title>
    <style>
        table {
            border-collapse: collapse;
        }
        tr, td {
            border: 1px solid black;
            padding: 0.5rem;
        }

        .outer {
            width: 100%;
        }

        .content-container {
            margin: auto;
            width: 70%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white; /* Set a background color for the content container */
        }

        @media (max-width: 600px) {
            .content-container {
                width: 100%;
            }
        }
    </style>
</head>
<body style="

<?php
require_once "./conn.php";

$stmt = $conn->prepare("SELECT bg1, bg2 FROM config WHERE 1 LIMIT 1");
$stmt->execute();
$stmt->bind_result($bgColor1, $bgColor2);
$stmt->fetch();
$stmt->close();
echo "background: linear-gradient(90deg, $bgColor1, $bgColor2);"
?>

">
<?php include "nav.php" ?>
<div class="outer">
    <div class="content-container">
        <div id="markdown"></div>
    </div>
</div>
</body>
</html>
