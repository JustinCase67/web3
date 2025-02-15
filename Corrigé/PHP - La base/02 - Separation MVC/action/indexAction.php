<?php
    
    function execute() {
        $email = null;
        $errorMessage = null;

        if (!empty($_POST["champCourriel"])) {
            if ($_POST["champCourriel"] == "test@test.com" && 
                $_POST["champMotDePasse"] == "test") {
                header("location:prive.php");
                exit;
            }
            else {
                $errorMessage = "Connexion erronée";
            }
        }

        return compact("errorMessage", "email");
        // return [
        //     "errorMessage" => "Connexion erronée"
        // ];
    }
