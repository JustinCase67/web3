<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>
		<?php
			for ($i = 0; $i < 100; $i++) {
				?>
				<div>
					<input type="radio" name="taille" value="<?= $i ?>"> <?= $i ?>
				</div>
				<?php
			}

			$i = 50;

			while($i > 0) {
				$i--;
				echo $i;
			}

			$tab = array();
			$tab = [];

			// array_push
			$tab[] = "John";
			$tab[] = "Smith";

			// echo $tab;
			// var_dump($tab);

			foreach($tab as $element) {
				// phpr = phpt mais inverse (on ferme php, puis le réouvre)
				?>
				<div>
					<?= $element ?>
				</div>
				<?php
			}
		?>
	</body>
</html>







