<?php

$username = "root";
$password = "root";
$dbname   = "p3_games"; 

try {
    $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $games = $conn->query("SELECT * FROM games"); 
    
    $results = $games->fetchAll(PDO::FETCH_ASSOC);


    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

echo "<ul>";

foreach ($results as $result) {
    echo "<li>" . $result['title'] . "</li>";
}

echo "</ul>";