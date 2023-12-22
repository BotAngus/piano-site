<?php
// Include the database connection
require_once "conn.php";

// Check if the name parameter is provided in the GET request
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // Retrieve image data from the database based on the name
    $stmt = $conn->prepare("SELECT image FROM images WHERE name = ?");
    $stmt->bind_param("s", $name);

    $stmt->execute();
    $stmt->bind_result($imageData);

    // Check if a record is found
    if ($stmt->fetch()) {
        // Set appropriate headers for image display
        header('Content-Type: image/*; filename=' . $name . ".png");
        echo base64_decode($imageData);
    } else {
        // Image not found
        echo "Image not found!";
    }

    // Close the statement
    $stmt->close();
} else {
    // No name parameter provided
    echo "Please provide a 'name' parameter in the GET request.";
}

// Close the connection
$conn->close();
?>
