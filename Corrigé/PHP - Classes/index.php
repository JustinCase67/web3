<?php
    require_once("User.php");
    require_once("Student.php");

    $user = new User("John", "Smith");
    $user = new User("John", "Smith");
    $user = new User("John", "Smith");
    $user = new User("John", "Smith");
    $student = new Student("Jane", "Doe");

    echo $user->getName();
    echo $student->getName();

    echo User::getUserCounter();