<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>
		<?php
			for ($i = 0; $i < 100; $i++) { //phpr pour reverse php (pour faire un trou HTML dans ton code php)
				?>
				<div>
					<input type="radio" name="taille" value="<?= $i ?>"> <?= $i ?>
				</div>
				<?php
			}

			$i = 50;

			while($i > 0) {
				$i--;
				echo $i ." "; //écrit en HTML 
			}

			$tab = array(); // old stuff not use that shit 
			$tab = [];

			// array_push
			$tab[] = "John";
			$tab[] = "Smith";

			//echo $tab; //Tu ne peux pas faire ça. For loop pour print chaque élément 
			var_dump($tab); //Print dans la console, l'état de ton array en mode Debug  

			foreach($tab as $element) { //La bonne manière de print les éléments d'un array 
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







