<?php

// PDO database connection settings
$username = "root";
$password = "root";
$dbname   = "p3_games";

try {
    // create a new PDO instance and enable exception error mode
    $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // on failure, output the error message
    echo "Connection failed: " . $e->getMessage();
}
