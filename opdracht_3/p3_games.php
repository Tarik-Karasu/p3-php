<?php

$host = "localhost";
$dbname = "p3_games";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query
    $stmt = $pdo->prepare("SELECT * FROM games");
    $stmt->execute();

    // associative array
    $games = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    echo "Database fout: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Games</title>
</head>
<body>

<h1>Games lijst</h1>

<?php if(count($games) > 0): ?>

<ul>

<?php foreach($games as $game): ?>

<li>
<?php echo $game['title']; ?>
</li>

<?php endforeach; ?>

</ul>

<?php else: ?>

<p>Er zijn nog geen games gevonden.</p>

<?php endif; ?>

</body>
</html>