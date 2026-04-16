<?php
require_once __DIR__ . '/db-test.php';

$pdo = $conn;

$pdo->exec("CREATE TABLE IF NOT EXISTS items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titel VARCHAR(255) NOT NULL,
    omschrijving TEXT NOT NULL
)");

$titel = "Test item";
$omschrijving = "Dit is een test.";

$sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    'titel' => $titel,
    'omschrijving' => $omschrijving
]);

echo "Insert gelukt!";
