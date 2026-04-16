<?php
$titel = $_POST['titel'] ?? '';
?>

<!doctype html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>POST test</title>
</head>
<body>
	<h1>POST test</h1>

	<form method="POST" action="">
		<label for="titel">Titel</label>
		<input id="titel" name="titel" type="text">
		<button type="submit">Verstuur</button>
	</form>

	<h2>$_POST</h2>
	<pre><?php print_r($_POST); ?></pre>

	<h2>Titel</h2>
	<p><?php echo htmlspecialchars($titel, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>
