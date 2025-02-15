<?php
	
	function hasher($mot, $sel = "abc") {
		// $mot = sha1($mot . $sel);
		$mot = password_hash($mot, PASSWORD_DEFAULT);
		// valid = password_verify("test", $mot);
		return $mot;
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les fonctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Création d'un hash</h1>
		<div><?= hasher("test", "1") ?></div>
		<div><?= hasher("test", "2") ?></div>
	</body>
</html>







