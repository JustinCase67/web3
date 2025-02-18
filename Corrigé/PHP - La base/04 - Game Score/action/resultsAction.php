<?php
    function execute(){
        $datafile = file_get_contents("results.txt");
        $results = explode("\n", $datafile);

        return compact("results"); 
    }
?>