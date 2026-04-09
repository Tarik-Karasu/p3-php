<?php
require 'db-test.php';

$stmt = $conn->prepare("SELECT * FROM games");
$stmt->execute();

$games = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($games) > 0) {
    echo "<ul>";

    foreach ($games as $game) {
        echo "<li>" . $game['title'] . "</li>";
    }

    echo "</ul>";
} 
?>