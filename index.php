<?php
require "includes/database_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TraceIt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="main-section">
        <h1>TraceIT</h1>
        <p>Whether you’ve lost a phone, a wallet — or found someone else’s valuables — this is the place to share, search, and return with ease</p>
    </div>
    <br><br>

    <div class="navigation-section">
        <div class="lost-section">
            <p>have you lost something?</p>
            <a href="lost.php"><button class="btn-anchor-home">Find here</button></a>
        </div>
        <div class="found-section">
            <p>have you found something?</p>
            <a href="found.php"><button class="btn-anchor-home">List here</button></a>
        </div>
    </div>

    <div class="about-section">
        <h1>About Us</h1><br>
        <p>At our Lost and Found Portal, we aim to bridge the gap between those who have lost valuable items and those who have found them. Whether it's a misplaced phone or a forgetten bag, our platform provides a simple, community-driven way to report and recover lost belongings. Users can easily create listings for items they’ve lost or found, browse recent reports, and connect with others to help return items to their rightful owners. Built with trust and collaboration in mind, our mission is to make it easier for people to do the right thing and bring peace of mind to those in distress.</p>
    </div>

    <div class="footer">
        <p>2025&copy;all rights reserved</p>
    </div>
</body>
</html>