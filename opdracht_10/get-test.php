<?php
$titel = $_GET['titel'] ?? '';
?>

<!doctype html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>GET test</title>
</head>
<body>
	<h1>GET test</h1>

	<form method="GET" action="">
		<label for="titel">Titel</label>
		<input id="titel" name="titel" type="text">
		<button type="submit">Verstuur</button>
	</form>

	<h2>$_GET</h2>
	<pre><?php print_r($_GET); ?></pre>

	<h2>Titel</h2>
	<p><?php echo $titel; ?></p>
</body>
</html>
