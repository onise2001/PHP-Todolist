<?php require_once "config/init.php"?>


<?php

    session_start();

    $template = new Template("templates/main.php");

    $template->username = $_SESSION['username'];

    $template->title = "PHP-Todolist";

    echo $template;

?>