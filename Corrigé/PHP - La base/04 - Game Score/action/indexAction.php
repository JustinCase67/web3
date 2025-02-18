<?php
    function execute() {
        if (!empty($_POST["pointage"])){
            file_put_contents("results.txt",  date("Y-m-d H:i:s", time())." - ". ($_POST["pointage"]/1000)." secondes"."\n", FILE_APPEND );
        }

        return [];
    }
