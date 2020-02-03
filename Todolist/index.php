<?php include_once "config/init.php";

    $todo_service = new Todo();
   
    $session = new Session();
    if(!$session->is_logged_in())
    {
      header("location: login.php");
    }


    

    $error_message = '';

   /*  if(isset($_POST['add-todo'])){
        $todo = array(
          'user_id' => $_SESSION['user_id'],
          'title' => $_POST['title'],
          'date' => $_POST['date']
        );

        if($todo_service->addTodo($todo)){

           $error_message = "<div class='alert alert-success'>Added Todo</div><br>";

        }else{
           $error_message = "<div class='alert alert-danger'>Couldn't Add Todo</div><br>";

        }
    } */


?>


<?php

   $template = new Template("templates/main.php");
   $template->title = "TODOLIST";
   $template->style_path = "templates/includes/styles/style.css";
   $template->error_message = $error_message;
   // $template->todos = $todos;
   $template->script = "main.js";

   echo $template;


?>