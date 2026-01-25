<?php
include 'db_connect.php';

// The password you want to use
$password = "admin123"; 

// Create a hash that is GUARANTEED to work on your specific computer
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 1. First, delete the old broken admin if it exists
$conn->query("DELETE FROM users WHERE email='admin@asweetenz.com'");

// 2. Insert the fresh Admin account
$sql = "INSERT INTO users (username, email, password, user_role, is_verified) 
        VALUES ('Admin', 'admin@asweetenz.com', '$hashed_password', 'admin', 1)";

if ($conn->query($sql) === TRUE) {
    echo "<h1>SUCCESS!</h1>";
    echo "<p>Admin account has been reset.</p>";
    echo "<p><strong>Email:</strong> admin@asweetenz.com</p>";
    echo "<p><strong>Password:</strong> admin123</p>";
    echo "<br><a href='Login.php'>Go to Login Page</a>";
} else {
    echo "Error: " . $conn->error;
}
?>