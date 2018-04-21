<?php
/*
$servername = "localhost";
$username = "id5213541_root";
$password = "senha";
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_projeto_les";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>