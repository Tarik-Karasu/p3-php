<?php
$pageTitle = "Home - ChessMate";
include "../includes/header.php";
include "../includes/nav.php";

$partijen = [
    [
        "tegenstander" => "Omer Faruk",
        "resultaat" => "Win",
        "status" => "Afgerond"
    ],
    [
        "tegenstander" => "Mikhail Tal",
        "resultaat" => "Lose (ofc)",
        "status" => "Afgerond"
    ]
];
?>

<h1>Home</h1>
<p>Overzicht van je schaakpartijen:</p>

<?php foreach ($partijen as $partij): ?>
    <div>
        <p>Tegenstander: <?= $partij["tegenstander"] ?></p>
        <p>Resultaat: <?= $partij["resultaat"] ?></p>
        <p>Status: <?= $partij["status"] ?></p>
    </div>
    <hr>
<?php endforeach; ?>

<?php include "../includes/footer.php"; ?>
