<?php


$appNaam = "ChessMate";
$trackerType = "chess game tracking";
$tagline = "Follow your chess games and improve your play with ChessMate!";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?= $appNaam ?></title>
</head>
<body>

    <h1>Hi, welcome to <?= $appNaam ?></h1>
    <p>This is your <?= $trackerType ?> app.</p>
    <p><em><?= $tagline ?></em></p>

    <footer>
        <p>&copy; <?= date("Y") ?> <?= $appNaam ?></p>
    </footer>

</body>
</html>