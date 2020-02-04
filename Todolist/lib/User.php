<?php
    include_once "C:/xampp/htdocs/PHP-Todolist/Todolist/config/init.php";


    class User {

        private $conn;
        private $msg;

        public function __construct(){
            $db = new Database();
            $this->conn = $db->getConnection();
            $this->msg = '';
        }

        public function sign_in($data){
           $username = $data['username'];
           $password = $data['password'];

            if($username == "" OR $password == ""){
              $this->msg .= "<div class='alert alert-danger'>* Fields are required</div><br>";
            }
            if(strlen($username) < 4){
              $this->msg .= "<div class='alert alert-danger'>Username has to be at least 4 characters long</div><br>";
            }
            if(strlen($password) < 4){
              $this->msg .= "<div class='alert alert-danger'>Password has to be at least 4 characters long</div><br>";
            }

            if($this->msg != ''){
                return $this->msg;
            }


 
            $query = $this->conn->prepare("SELECT * FROM users WHERE username = '$username'");
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $user = $query->fetch();
            if($user['password'] == $password){
               session_start();
               $_SESSION['user_id'] = $user['id'];
               $_SESSION['username'] = $user['username'];
               $_SESSION['logged_in'] = true;
               header("location: index.php");
            }

        }


        public function sign_up($data){
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $username = $data['username'];
            $password = $data['password'];

            if($username == "" OR $password == ""){
              $this->msg .= "<div class='alert alert-danger'>* Fields are required</div><br>";
            }
            if(strlen($username) < 4){
              $this->msg .= "<div class='alert alert-danger'>Username has to be at least 4 characters long</div><br>";
            }
            if(strlen($password) < 4){
              $this->msg .= "<div class='alert alert-danger'>Password has to be at least 4 characters long</div><br>";
            }

            if($this->msg != ''){
                return $this->msg;
            }


            try{
             $query = $this->conn->prepare("INSERT INTO user (firstname, lastname, username, password) VALUES (:firstname, :lastname, :username, :password)");
             $query->bindParam(':firstname', $firstname);
             $query->bindParam(':lastname', $lastname);
             $query->bindParam(':username', $username);
             $query->bindParam(':password', $password);
             $query->execute();

            }catch(PDOException $e){
                $this->msg = "ERROR: ".$e->getMessage();
                return $this->msg;
            }
            header("location: index.php");



        }



    }


?>