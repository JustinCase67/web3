<?php
    session_start();

    function execute() {
        if(!isset($_SESSION["MesPostIt"])){
            $_SESSION["MesPostIt"] = [];
        }
    
        $memos = $_SESSION["MesPostIt"];

        return compact("memos");
    }

    

    
?>