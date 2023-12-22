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
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            width: 100%;
        }

        form {
            width: 60%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        textarea {
            height: 300px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
    </style>
    <title>Editing</title>
</head>
<body>
<form action="" method="POST">
    <label for="pageSelect">Select Page:</label>
    <select id="pageSelect" name="page">
        <option value="about">About</option>
        <option value="pricing">Pricing</option>
        <option value="room">Room</option>
        <option value="content">Content</option>
        <option value="events">Events</option>
        <option value="contact">Contact</option>
    </select>

    <label for="content">Content:</label>
    <textarea id="content" name="content" rows="4" cols="50" required></textarea>

    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['content']) && isset($_POST["page"])) {
    require_once "../conn.php";

    $stmt = $conn->prepare("UPDATE pages SET body=? WHERE route=?");
    $stmt->bind_param("ss",$_POST['content'], $_POST['page']);
    $stmt->execute();
    $stmt->close();
}
