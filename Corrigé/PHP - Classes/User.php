<?php
    
    class User {
        private $firstName;
        private $lastName;
        private static $userCounter = 0;
        
        public function __construct($firstName, $lastName) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            User::$userCounter++;
        }

        public static function getUserCounter() {
            return User::$userCounter;
        }

        public function getName() {
            return $this->firstName . " " . $this->lastName;
        }
    }