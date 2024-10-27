<?php
// Start the session
session_start();

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'education_site');

// Check if connection was successful
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert the new user into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        header('Location: courses.php'); // Redirect to courses after registration
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
