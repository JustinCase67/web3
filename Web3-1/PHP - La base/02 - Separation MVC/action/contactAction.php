<?php
    
    function execute() {
        $commentSent = false;

        if (!empty($_POST["comment"])) {
            $commentSent = true;
        }
    
        return compact("commentSent");
    }