<?php

namespace App;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "swapbook";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

class User {
    public $first_name;
    public $last_name;
    public $email;
    public $id;
    public $pw;

    
    public function __construct($first_name, $last_name, $email, $id, $pw) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->id = $id;
		$this->pw = $pw;
    }

    public function setFirst($first_name) {
        $this->first_name = $first_name;
    }
    
    public function setLast($last_name) {
        $this->last_name = $last_name;
    }
    
    public function setUserName($email){
        $this->email = $email;
    }

    public function setPass($pw){
        $strong;
		passStrength($strong,$pw);
		if($strong == FALSE) {
			$pw = NULL;
        }
        else{
            $this->pw = $pw;
       }
    }

	public function passStrength($strong,$pw){
        if(strlen($pw) < 8 || !preg_match("#[0-9]+#", $pw) || !preg_match("#[A-Z]+#", $pw)) {
            return $strong = FALSE;
        }
        else{
            return $strong = TRUE;
       }
    }
    
	public function getFirst() {
        return $this->first_name;
    }

    public function getUserName() {
        return $this->email;
    }

	public function getPass() {
        return $this->pw;
    }
    
    public function insert() { 
        $insertCheck;
		if ($this->first_name != NULL && $this->last_name != NULL && $this->email != NULL && $this->pw != NULL) {
            return $insertCheck = TRUE;
        }
        else {
            return $insertCheck = FALSE;
        }
    }
}
       
?>