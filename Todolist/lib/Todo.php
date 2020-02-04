<?php  
        include_once "C:/xampp/htdocs/PHP-Todolist/Todolist/config/init.php";

 ?>

<?php

 class Todo{
      
    private $conn;
    private $msg;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->getConnection();
        $this->msg = '';

    }


    public function getAllTodos($user_id){

        try{
            $query = $this->conn->prepare("SELECT * FROM todo WHERE user_id = $user_id");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $todos = $query->fetchAll();
            return $todos;


        }catch(PDOException $e)
        {
            return array('error' => $this->msg = "ERROR: ".$e->getMessage());

        }
 
    }


    public function addTodo($todo){

        if($todo['title'] == ''){
            return false;
        }
        
        $user_id = $todo['user_id'];
        $title = $todo['title'];
        $time = $todo['date'];


        try{
            $query = $this->conn->prepare("INSERT INTO todo (user_id, title, date) VALUES (:user_id, :title, :date)");
            $query->bindValue(":user_id" , $todo['user_id']);
            $query->bindValue(":title" , $todo['title']);
            $query->bindValue(":date" , $todo['date']);
            $query->execute();
            return true;
        }catch(PDOException $e)
        {
            return false;
                
        }
    }


    public function deleteTodo($todo_id){

        try{
            $query = $this->conn->prepare("DELETE FROM todo WHERE id = $todo_id");
            $query->execute();
            return true;


        }catch(PDOException $e){
            return false;
        }

    }




 }




?>
