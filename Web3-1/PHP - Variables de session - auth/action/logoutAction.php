<?php
    session_start();
    
    function execute() {
        session_destroy();
        session_start();
        
		$isConnected = !empty($_SESSION["courriel"]);

        return compact("isConnected");
    }