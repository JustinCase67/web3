<?php
    session_start();
    
    function execute() {
        session_destroy(); //détruit la session avec les valeurs sauvegardé
        session_start(); // création d'une nouvelle session vide 
        
		$isConnected = !empty($_SESSION["courriel"]);

        return compact("isConnected");
    }