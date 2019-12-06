<?php
include('lib/config.php');
session_start();

class User {
    public $first_name;
    public $last_name;
    public $myusername;
    public $id;
    protected $pwd;
    
    public function __construct($first_name, $last_name, $email, $id) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->myusername = $email;
        $this->id = $id;
    }

    public function setFirst($first_name) {
        $this->first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
    }
    
    public function setLast($last_name) {
        $this->last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
    }
    
    public function setUserName($email){
        $this->myusername = mysqli_real_escape_string($conn,$_POST['email']);
    }

    public function setPass($pw){
        if(strlen($pwd) < 8 || !preg_match("#[0-9]+#", $pwd) || !preg_match("#[A-Z]+#", $pwd)) {
            $error = "Password is too weak";
        }
        else{
            $this->pwd = mysqli_real_escape_string($conn,$_POST['pw']);
       }
    }
    
    public function getUsername() {
        $user_check = $_SESSION['login_user'];
        $ses_sql = mysqli_query($conn,"select email from user where email = '$user_check' ");
        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
        $login_session = $row['email'];
        return $login_session;
    }
    
    public function insert($first_name, $last_name, $email, $pw) {
        $sql = "INSERT INTO user (first_name, last_name, email, pw)
        VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[pw]')";
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header('Location: ../index.php');
        }
        
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
       
?>