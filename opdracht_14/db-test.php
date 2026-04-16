<?php

$username = "root";
$password = "root"; 

try {
    $conn = new PDO("mysql:host=localhost;dbname=p3_games", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connectie mislukt: " . $e->getMessage());
}