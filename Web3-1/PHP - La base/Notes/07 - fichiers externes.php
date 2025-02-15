<?php
	// include, incluce_once, require
	require_once("lib/Utils.php"); //Tu es obligé de trouver le fichier sinon ça marche
	require_once("lib/Utils.php"); // Il va skipper car il a déjà loader ce fichier
	
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Fichiers externes</title>
		<meta charset="utf-8" />
	</head>
	<body>
		Résultat : <?= resultatFormuleScientifique(1, 2) ?>
	</body>
</html>







