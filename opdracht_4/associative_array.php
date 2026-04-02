<?php

$games = [
    [
        "titel" => "Chess",
        "genre" => "Strategy",
        "platform" => "Board / Online"
    ],
    [
        "titel" => "League of Legends",
        "genre" => "MOBA",
        "platform" => "PC"
    ]
];

?>

<h1>Mijn Games</h1>

<p><?= $games[0]["titel"]; ?> - <?= $games[0]["genre"]; ?> - <?= $games[0]["platform"]; ?></p>

<p><?= $games[1]["titel"]; ?> - <?= $games[1]["genre"]; ?> - <?= $games[1]["platform"]; ?></p>