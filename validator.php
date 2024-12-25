<?php
session_start(); // Start the session

// Check if the session variable 'name' is not set
if (!isset($_SESSION['name'])) {
    // Redirect the user to the login page
    header("Location: ../login.php");
    exit(); // Stop further execution of the script
}

// If the session variable is set, allow access to the dashboard

?>
