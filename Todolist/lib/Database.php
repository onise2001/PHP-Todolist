<?php  
include_once "C:/xampp/htdocs/Todolist/config/init.php";


class Database{

     public $conn;

     public function __construct(){
          try{
              $this->conn = new PDO("mysql:host=localhost;dbname=todolist", 'root', '');

              $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          }catch(PDOException $e){
              echo "Connection Failed ". $e->getMessage();
          }
     }

     public function getConnection(){
         return $this->conn;
     }

   }



?>