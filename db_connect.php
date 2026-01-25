<?php
// Start the session to track logged-in users
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ==========================================
// DATABASE CREDENTIALS
// ==========================================
$servername = "localhost";
$username = "root";      // Default username for XAMPP/MAMP
$password = "";          // Default password for XAMPP/MAMP (leave empty)
$dbname = "ASweetenz";   // The exact name of your database

// ==========================================
// CREATE CONNECTION
// ==========================================
$conn = new mysqli($servername, $username, $password, $dbname);

// ==========================================
// CHECK CONNECTION
// ==========================================
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ==========================================
// GLOBAL HELPER FUNCTIONS
// ==========================================

// Check if a user is logged in
if (!function_exists('isLoggedIn')) {
    function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }
}

// Check if the logged-in user is an Admin
if (!function_exists('isAdmin')) {
    function isAdmin() {
        return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
    }
}

// Safe way to escape strings (prevents hacking)
if (!function_exists('escape')) {
    function escape($string) {
        global $conn;
        return $conn->real_escape_string($string);
    }
}
?>