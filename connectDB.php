<?php
$servername ="127.0.0.1";
$username = "root";
$password = "123456789";
$dbname = "phpdev";
$conn = new mysqli($servername, $username, $password,$dbname);


if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}

// echo "Connect Successful ! ";
?>