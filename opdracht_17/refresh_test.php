<?php
require_once __DIR__ . '/db-test.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$titel = trim($_POST['titel'] ?? '');

	if ($titel !== '') {
		$stmt = $conn->prepare('INSERT INTO refresh_posts (titel) VALUES (:titel)');
		$stmt->execute(['titel' => $titel]);
	}
}
?>

<!doctype html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Refresh test</title>
</head>
<body>
	<h1>Refresh test</h1>

	<form method="post" action="">
		<label for="titel">Titel</label>
		<input id="titel" name="titel" type="text" required>
		<button type="submit">Opslaan</button>
	</form>
</body>
</html>
