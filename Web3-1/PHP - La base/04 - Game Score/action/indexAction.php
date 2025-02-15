<?php
    function execute(){
        if(!empty($_POST["pointage"]))
        {
            $score = $_POST["pointage"]/1000;
            $formattedDate = date("Y-m-d H:i:s", time());
            $newscore = $formattedDate . " - " . $score . " secondes\n";
            file_put_contents("data/results.txt", $newscore, FILE_APPEND);
        }

    }
?>