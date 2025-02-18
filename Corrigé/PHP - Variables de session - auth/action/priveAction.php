<?php
	session_start();

	function execute() {
		$cc = "4540 1233 5645 3453";
		$isConnected = !empty($_SESSION["courriel"]); //Pourquoi on check ici si on est connecté?
	
		if (empty($_SESSION["courriel"])) // CHECK POUR LA SÉCURITÉ
		{
			header("location:index.php");
			exit;
		}
		
		return compact("cc", "isConnected");
	}