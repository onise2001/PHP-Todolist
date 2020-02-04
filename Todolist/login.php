<?php
   require_once "config/init.php";
   $user = new User();
   $login_error ='';
    if(isset($_POST['submit'])){
      $login_error = $user->sign_in($_POST);
    }
?>   
<?php
    $template = new Template("templates/login-template.php");

    $template->title = "Login - PHP-Todolist";
    $template->error = $login_error;

    echo $template;


?>