<?php
	$info = $_GET["info"] ?? "";
	$showSuccessBox = false;

	// Version traditionnelle
	// !empty = variable existe, n'est pas nulle, ni 0, ni ""
	// $_POST si method="post"
	//Check seulement si le premier est empty/undefined pourle check 
	if (!empty($_GET["info"])) {
		$infoDeLusager = $_GET["info"];

		if (strlen($infoDeLusager) >= 5) {
			$showSuccessBox = true;
		}
	}

	if (!empty($_POST["champ2"])) {
		// safdsafd
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="" method="get">
			<?php
				if ($showSuccessBox) {
					?>
					<div style="color:green;padding:2px;background-color:#0d0">
						Bravo !
					</div>
					<?php
				}
			?>
			<div>
				Info : <input type="text" name="info" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>







