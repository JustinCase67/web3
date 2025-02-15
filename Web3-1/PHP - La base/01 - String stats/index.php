<?php
	$textLength = null;

	if (!empty($_POST["searchBox"])) { //comment il sait que le searchBox exist
		$textLength = strlen($_POST["searchBox"]);
	}

	//Manière 2 : $textLength = strlen($_GET["searchBox"]) ?? null 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>String stats</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<div id="analyze-icon"></div>
			<div id="analyze-result">
				<?php
					if (!empty($textLength)) {
						echo $textLength;
					}
					else {
						?>
						Entrez une chaîne de caractères et appuyez sur analyser						
						<?php
					}
				?>
			</div>
			<form action="" method="post">
				<div id="search-line">
					<div>
						<input type="text" name="searchBox" placeholder="Texte à analyser" />
					</div>
					<div class="btn">
						<button>Analyser</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>