<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: indexlogin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #4CAF50;
            padding: 10px 20px;
            
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
   
    </style>
</head>
<body>
    <div class="navbar">
        <a href="homepage.php">Home</a>
        <a href="indexlogout.php">
            <button class="logout-btn">Logout</button>
        </a>
    </div>

    <div class="content">
        <p>You are now logged in.</p>
    </div>
</body>
</html>
