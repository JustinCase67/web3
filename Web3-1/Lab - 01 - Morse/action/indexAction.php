<?php
	// À compléter
	require_once("action/utils/morse-utils.php");

	function execute(){
		if(!empty($_POST["morse"]) && !empty($_POST["ascii"])){
			header("location:index.php");
			exit();
		}
		elseif(!empty($_POST["morse"]) || !empty($_POST["ascii"]))
		{
			if(!empty($_POST["morse"])){
				$text = $_POST["morse"];

				$results = encodeMorse($text);

				return compact("results");
			}

			if(!empty($_POST["ascii"])){
				$text = $_POST["ascii"];

				$results = decodeMorse($text);

				return compact("results");
			}
		}
	}
	