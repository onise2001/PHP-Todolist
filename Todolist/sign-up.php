<?php
    require_once "config/init.php";

    $user = new User();
    $error="";
    if(isset($_POST['sign-up'])){
        $error = $user->sign_up($_POST);
    }


?>

<?php

    $template = new Template("templates/sign-up-template.php");
    $template->title = "Sign Up - PHP-Todolist";
    $template->error = $error;

    echo $template;


?>