<?php
require "includes/database_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $desc = trim($_POST['desc']);
    $location = trim($_POST['location']);
    $contact = trim($_POST['contact']);
    $section = trim($_POST['section']);
    $image = $_FILES["image"]["name"];
    $temp = $_FILES["image"]["tmp_name"];
    $folder = "images/items/" . $image;



    // Basic validation
    if (empty($title) || empty($desc) || empty($location) || empty($location)) {
        echo "<script>alert('Please fill required fields.');</script>";
    } elseif(move_uploaded_file($temp, $folder)) {
        $sql = "INSERT INTO items (title, description, location, contact, section, image) VALUES ('$title', '$desc', '$location', '$contact', '$section', '$folder')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Item added successfully!'); window.location.href = 'index.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>
    <div class="add-container">
        <form class="form add-form" method="POST" enctype="multipart/form-data">
            <h2>Add Item</h2>
            <input type="text" name="title" placeholder="Item name" required>
            
            <textarea name="desc" id="desc" placeholder="description" rows="4"></textarea>
            <input type="text" name="location" placeholder="location" required>
            
            <input type="number" name="contact" placeholder="contact number" required>
            
            <select name="section" id="section" required>
                <option value="lost">Lost</option>
                <option value="found">Found</option>
            </select>
            <input type="file" name="image" class="img-input" >
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>