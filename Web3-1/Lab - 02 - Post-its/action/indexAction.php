<?php
	session_start();

	function execute() {
		if(empty($_SESSION["MesPostIt"])){
            $_SESSION["MesPostIt"] = [];
        }

        if(!empty($_POST["task"])){
            $newpost = [];
            $newpost["task"] = $_POST["task"];
            $newpost["x"] = $_POST["x"];
            $newpost["y"] = $_POST["y"];

            $_SESSION["MesPostIt"][] = $newpost;

            $liste = $_SESSION["MesPostIt"];

            return compact("liste");
        }
	}