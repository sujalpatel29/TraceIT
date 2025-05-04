<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>
    <h2 id="heading-contact">Contact Us</h2>
    <div class="container-contact">
        <form action="" method="post" id="form-contact">
            <label for="contact-name">Name</label>
            <input type="text" name="" id="contact-name">
            <br>

            <label for="contact-phone">Phone Number</label>
            <input type="number" name="" id="contact-phone">
            <br>

            <label for="contact-email">Email ID</label>
            <input type="email" name="" id="contact-email">
            <br>

            <label for="contact-message">Message</label>
            <textarea name="" id="contact-message"></textarea>
            <br>

            <button type="submit" class="button-contact">Send Message</button>
        </form>
    </div>

</body>
</html>