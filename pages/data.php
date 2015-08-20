<?php
$servername = "localhost";
$username = "stage061_sanjid";
$password = "crysis1992";
$dbname='stage061_myself';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> 