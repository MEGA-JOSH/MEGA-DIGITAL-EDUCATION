<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'education_site');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database for user
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Check if password is correct
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header('Location: courses.php'); // Redirect to courses page after login
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No account found with that username.";
    }
}
?>
