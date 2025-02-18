<?php
	require_once("action/indexAction.php");

	$data = execute();

	require_once("partial/header.php");

	if(empty($data["results"])){
		?>
			<form action="" method="post">
				<br>
				<h3>Chaîne à convertir en morse</h3>
				<textarea name="morse" id="morse" rows="15" cols="60"></textarea>
				<br>
				<br>
				<h3>Chaîne à convertir en ASCII</h3>
				<textarea name="ascii" id="ascii" rows="15" cols="60"></textarea>
				<br>
				<br>
				<button class="conversion">Convertir</a></button>
			</form>
		<?php
	}

	else{
		?>
			<form action="post">
				<br>
				<input type="text" value="<?php echo $data["results"];?>">
				<br>
				<a href="index.php">Réessayer</a>
			</form>
		<?php
	}
	require_once("partial/footer.php");
?>
		