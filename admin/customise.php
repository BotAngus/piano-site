<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Customise</title>
</head>
<body>
<form action="#" method="POST">
    <label for="navBarColor1">Navigation Bar 1 Color:</label>
    <input type="color" id="navBarColor1" name="navBarColor1" value="#000000">

    <br>

    <label for="navBarColor2">Navigation Bar 2 Color:</label>
    <input type="color" id="navBarColor2" name="navBarColor2" value="#ffffff">

    <br>

    <label for="bgColor1">Background Color 1:</label>
    <input type="color" id="bgColor1" name="bgColor1" value="#ffffff">

    <br>

    <label for="bgColor2">Background Color 2:</label>
    <input type="color" id="bgColor2" name="bgColor2" value="#e0e0e0">

    <br>

    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $navBarColor1 = $_POST['navBarColor1'] ?? '';
    $navBarColor2 = $_POST['navBarColor2'] ?? '';
    $bgColor1 = $_POST['bgColor1'] ?? '';
    $bgColor2 = $_POST['bgColor2'] ?? '';

    // Now you can use these variables as needed, for example, you might want to store them in a database
    // or use them to generate CSS styles for your webpage

    // Example: Output the values
    echo "Navigation Bar 1 Color: $navBarColor1 <br>";
    echo "Navigation Bar 2 Color: $navBarColor2 <br>";
    echo "Background Color 1: $bgColor1 <br>";
    echo "Background Color 2: $bgColor2 <br>";
}
?>
