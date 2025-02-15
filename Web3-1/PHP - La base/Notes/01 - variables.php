<?php
	// phpt = php tags
	// phpe = faire un écho rapide
	// 
	#
	/* */
	$username = 'John';	
	$age1 = 32;
	$age2 = 21;
	$age = $age1 + $age2;

	if ($username == "John") {
		$username = $username . " Smith"; //pour concatener des strings il faut utiliser le point (.)
	}
?>
<!DOCT<?= "Y" ?>PE html>
<html lang="fr">
	<head>
		<title>Variables <?php echo $username ?></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<!-- "phpt" shortcut pour des tags php -->
		<?php echo $username?> 
		<!-- ecrit le nom "John" dans la page -->
		Nom : <?= $username ?> 
		<!-- "phpe" shortcut pour php echo -->
	</body>
</html>







