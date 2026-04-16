<?php
$currentDir = dirname($_SERVER["SCRIPT_NAME"]);
$basePath = str_replace("/pages", "", $currentDir);
?>

<nav>
    <a href="<?= $basePath ?>/pages/home.php">Home</a>
    <a href="<?= $basePath ?>/pages/toevoegen.php">Toevoegen</a>
</nav>
