<?php

if (!isset($_GET["route"])) {
    die("Page does not exist");
}
$route = $_GET["route"];

$servername = "localhost";
$database = "main";
$username = "site";
$password = "unbreakable";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$statement = $conn->prepare("SELECT title, body FROM pages WHERE route=?");
$statement->bind_param("s", $route);

$statement->execute();

$statement->bind_result($title, $body);
if (!$statement->fetch()) {
    die("Page does not exist");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="live.js"></script>
    <link rel="stylesheet" href="style.php">
    <title><?php echo $title ?>></title>
</head>
<body>
<?php include_once "nav.php" ?>

</body>


