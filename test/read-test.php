<?php

// Stap 3: verbinding maken met de database via PDO
$host     = 'localhost';
$dbname   = 'p3_games';      // pas hier de naam van je eigen database aan
$username = 'root';
$password = 'root';   // MAMP standaard wachtwoord voor root

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SELECT-query om alle records uit de tabel games op te halen
    $stmt = $pdo->prepare("SELECT * FROM games");
    $stmt->execute();       

    // resultaten als associatieve array ophalen
    $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Database fout: " . $e->getMessage();
    exit;
}

// Stap 4: alleen de titels weergeven in een lijst
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Games titels</title>
</head>
<body>
    <h1>Lijst met titels</h1>

    <?php if (!empty($games)): ?>
    <ul>
        <?php foreach ($games as $game): ?>
            <li><?php echo htmlspecialchars($game['title']); ?></li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
        <p>Er zijn geen games gevonden.</p>
    <?php endif; ?>

</body>
</html>
