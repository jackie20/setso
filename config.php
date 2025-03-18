<?php 

$host = 'localhost';
$dbname = 'ubaquatic_center';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $dbname);

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>