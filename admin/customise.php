<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0; /* Set a background color for the body */
        }

        form {
            width: 80%;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white; /* Set a background color for the form */
        }

        label, input, textarea, select {
            display: block;
            margin-bottom: 15px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        p {
            margin: 10px 0;
        }
    </style>
    <title>Customize</title>
</head>
<body>
<?php
// Fetch currently selected colors from the database
require_once "../conn.php";

$stmt = $conn->prepare("SELECT nav1, nav2, bg1, bg2 FROM config WHERE 1 LIMIT 1");
$stmt->execute();
$stmt->bind_result($navBarColor1, $navBarColor2, $bgColor1, $bgColor2);
$stmt->fetch();
$stmt->close();

?>

<form action="" method="POST">
    <label for="navBarColor1">Navigation Bar 1 Color:</label>
    <input type="color" id="navBarColor1" name="navBarColor1" value="<?= $navBarColor1 ?? '#000000' ?>">

    <label for="navBarColor2">Navigation Bar 2 Color:</label>
    <input type="color" id="navBarColor2" name="navBarColor2" value="<?= $navBarColor2 ?? '#ffffff' ?>">

    <label for="bgColor1">Achtergrond Kleur 1</label>
    <input type="color" id="bgColor1" name="bgColor1" value="<?= $bgColor1 ?? '#ffffff' ?>">

    <label for="bgColor2">Achtergrond Kleur 2</label>
    <input type="color" id="bgColor2" name="bgColor2" value="<?= $bgColor2 ?? '#e0e0e0' ?>">

    <input type="submit" value="Submit">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $navBarColor1 = $_POST['navBarColor1'] ?? '';
    $navBarColor2 = $_POST['navBarColor2'] ?? '';
    $bgColor1 = $_POST['bgColor1'] ?? '';
    $bgColor2 = $_POST['bgColor2'] ?? '';

    // Example: Store non-empty values in the database
    require_once "../conn.php";

    // Assuming you have a single row in the 'config' table

    if (!empty($navBarColor1)) {
        $stmtNav1 = $conn->prepare("UPDATE config SET nav1 = ? WHERE 1");
        $stmtNav1->bind_param("s", $navBarColor1);
        $stmtNav1->execute();
        $stmtNav1->close();
    }

    if (!empty($navBarColor2)) {
        $stmtNav2 = $conn->prepare("UPDATE config SET nav2 = ? WHERE 1");
        $stmtNav2->bind_param("s", $navBarColor2);
        $stmtNav2->execute();
        $stmtNav2->close();
    }

    if (!empty($bgColor1)) {
        $stmtBg1 = $conn->prepare("UPDATE config SET bg1 = ? WHERE 1");
        $stmtBg1->bind_param("s", $bgColor1);
        $stmtBg1->execute();
        $stmtBg1->close();
    }

    if (!empty($bgColor2)) {
        $stmtBg2 = $conn->prepare("UPDATE config SET bg2 = ? WHERE 1");
        $stmtBg2->bind_param("s", $bgColor2);
        $stmtBg2->execute();
        $stmtBg2->close();
    }

    // Close the connection
    $conn->close();
}
?>

</body>
</html>
