<?php
session_start();
session_unset();
session_destroy();
header("Location: Login.php"); // Redirect back to login
exit();
?>