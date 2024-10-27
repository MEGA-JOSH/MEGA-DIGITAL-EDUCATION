<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.html'); // Redirect to login if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="sidebar.css">
</head>
<body>
    <div class="sidebar">
        <h3>My Website</h3>
        <a href="index.html">Home</a>
        <button class="dropdown-btn">Courses ▼</button>
        <div class="dropdown-container">
            <a href="web-development.html">Web Development</a>
            <a href="data-science.html">Data Science</a>
            <a href="digital-marketing.html">Digital Marketing</a>
        </div>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="main-content">
        <h2>Welcome to the Courses Section</h2>
        <p>Only logged-in users can access this page.</p>
    </div>
</body>
</html>
