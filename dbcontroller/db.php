<?php
$servername = "localhost";
$username = "root";
$password = "Genhack27@";
$dbname = "vid4vid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
