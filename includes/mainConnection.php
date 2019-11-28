<?php
class mainConnection {
    const BR = '<br />';
    var $username;
    var $password;
    var $login;
    
    
    function getUserName()
    {
        return $this->username;
    }
    
	function setUserName($userN)
    {
        $this->username = $userN;
    }


	
    function getPassword()
    {
        return $this->password;
    }
    
    function setPassword($passWord)
    {
        $this->password = $passWord;
    }

   

    function getLogIn()
    {
        return $this->login;
    }
    
    function setLogIn($Login)
    {
        $this->login = $Login;
    }
    

	
    public function display_connection(){
           
           echo $this->getUserName().self::BR;
           echo $this->username.self::BR;
           
		   echo $this->getPassword().self::BR;
           echo $this->password.self::BR;
           
		   echo $this->getLogIn().self::BR;
           echo $this->login.self::BR;
     }
}


$mainConnection = new mainConnection;

$mainConnection-> setUserName('root');
$mainConnection-> setPassword(2020);
$mainConnection-> setLogIn('successful');

$mainConnection->display_connection();


?>