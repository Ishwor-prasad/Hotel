<?php
// Establish a connection to the MySQL server
$con = mysqli_connect("localhost", "root", "", "hotel");

// Check if the connection was successful
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
