<?php
    
    function execute() {
        $agents = [];
        $agents[] = "Austin Powers";
        $agents[] = "James Bond";
        $agents[] = "Ethan Hunt";

        return compact("agents");
        // $data["agents"]
    }