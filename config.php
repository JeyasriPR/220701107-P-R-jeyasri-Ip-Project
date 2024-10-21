<?php
$host = 'localhost';
$db = 'sms'; // Change this to your database name
$user = 'root'; // Change this if necessary
$pass = ''; // Change this if necessary

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// No closing ?> tag

