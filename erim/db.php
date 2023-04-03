<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // redirect to login page or display an error message
    header('Location: login.php');
    exit();
}



?>