<?php
require "includes/database_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Basic validation
    if (empty($fullname) || empty($email) || empty($password)) {
        echo "<script>alert('Please fill in all fields.');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Please enter a valid email address.');</script>";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password) VALUES ('$fullname', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Sign up successful!'); window.location.href = 'index.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'includes/navbar.php'; ?>
    <div class="register-container">
        <form class="form" method="POST">
            <h2>SignUp</h2>
            <input type="text" name="fullname" placeholder="Full Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">SignUp</button>
            <div class="form-bottom">
                <a href="">Forgot password</a>
                <a href="/login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>