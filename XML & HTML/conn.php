<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sarlon_web';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected successfully';
?>
