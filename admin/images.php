<?php
// Include the database connection
require_once "../conn.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get image data
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageData = base64_encode($imageData);

    // Get name from the form
    $name = $_POST['name'];

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO images (name, image) VALUES (?, ?) ON DUPLICATE KEY UPDATE image = ?");
    $stmt->bind_param("sss", $name, $imageData, $imageData);

    $stmt->execute();
    // Close the statement
    $stmt->close();
}

// Fetch uploaded images from the database
$result = $conn->query("SELECT name, image FROM images");
$images = $result->fetch_all(MYSQLI_ASSOC);
$result->close();

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        form {
            width: 50%;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label, input {
            display: block;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        .image-list {
            max-width: 400px;
            margin-left: 20px;
            overflow: auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
        }

        .image-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .image-item img {
            max-width: 80px;
            max-height: 80px;
            margin-right: 10px;
            border-radius: 4px;
        }

        .image-item p {
            margin: 0;
            font-weight: bold;
        }
    </style>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="image">Choose Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required>

    <input type="submit" value="Upload">
</form>

<!-- Display the list of uploaded images using regular PHP -->
<div class="image-list">
    <?php
    foreach ($images as $image) {
        echo '<div class="image-item">';
        echo '<img src="data:image/jpeg;base64,' . $image['image'] . '" alt="' . $image['name'] . '">';
        echo '<p>' . $image['name'] . '</p>';
        echo '</div>';
    }
    ?>
</div>
</body>
</html>
