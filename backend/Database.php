<?php

header('Access-Control-Allow-Origin: http://127.0.0.1:5500');


$host = 'localhost';
$database = 'evergreen';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";