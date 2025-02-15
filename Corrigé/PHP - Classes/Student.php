<?php
    require_once("User.php");
    
    class Student extends User {

        public function __construct($firstName, $lastName) {
            parent::__construct($firstName, $lastName);
        }

        public function getName() {
            return parent::getName() . " (étudiant)";
        }
    }