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
    <div class="register-container">
        <form class="form">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button>Login</button>
            <div class="form-bottom">
                <a href="">Forgot password</a>
                <a href="signup.php">SignUp</a>
            </div>
        </form>
    </div>
</body>
</html>