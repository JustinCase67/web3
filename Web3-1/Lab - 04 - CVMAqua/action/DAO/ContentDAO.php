<?php
    class ContentDAO{
        public static function setContent($data){
            file_put_contents("data/data.txt", $data);
        }

        public static function getContent(){
            return file_get_contents("data/data.txt");
        }

    }
?>