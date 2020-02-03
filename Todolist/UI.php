<?php
   include_once "config/init.php";
?>


<?php
       $todo_service = new Todo();
       $session = new Session();

       if($_GET['req'] == "yes"){
          $todos = $todo_service->getAllTodos($session->get_user_id());

          echo json_encode($todos);
       }


       if($_GET['req'] == "add"){
          $todo = array(
            'user_id' => $session->get_user_id(),
            'title' => $_GET['title'],
            'date' => $_GET['date']
        );

          if($todo_service->addTodo($todo)){
              echo 'success';
          }
       }
      
       

      
/* 
       $todo = array(
           'user_id' => $session->get_user_id(),
           'title' => $_REQUEST['title'],
           'date' => $_REQUEST['date']
       );

       if($todo_service->addTodo($todo)){
           echo json_encode($todo);
       }
   */






/*    class UI {

    private $todo_service;
    
    public function __construct(){
        $this->todo_service = new Todo();
    }


    public function loadTodos(){

        $todos = $this->todo_service->getAllTodos($_SESSION['user_id']);
        return $todos;


    }



   } */

?>