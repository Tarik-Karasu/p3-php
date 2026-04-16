<?php
$naam = '';
$aantal = '';

if (isset($_POST['naam'], $_POST['aantal'])) {
	$naam = $_POST['naam'];
	$aantal = $_POST['aantal'];
}
?>

<!doctype html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Form verwerk</title>
</head>
<body>
	<h1>Formulier test</h1>

	<form method="POST" action="">
		<label for="naam">Naam</label>
		<input id="naam" name="naam" type="text" required>

		<label for="aantal">Aantal</label>
		<input id="aantal" name="aantal" type="text">

		<button type="submit">Verstuur</button>
	</form>

	<?php if (isset($_POST['naam'], $_POST['aantal'])): ?>
		<p>Naam: <?php echo htmlspecialchars($naam, ENT_QUOTES, 'UTF-8'); ?></p>
		<p>Aantal: <?php echo htmlspecialchars($aantal, ENT_QUOTES, 'UTF-8'); ?></p>
	<?php endif; ?>
</body>
</html>
