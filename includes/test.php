<?php
require 'mainConnection.php';
use PHPUnit\Framework\TestCase;


class myTest extends TestCase{


	public function test1()
   	{
                $mainConnection = new mainConnection;
		$var = 'root';
		$mainConnection->setUserName('root');
		$this->assertEquals($var, $mainConnection->getUserName());
	}

	public function test2()
   	{
                $mainConnection = new mainConnection;
		$var = 'root';
		$mainConnection->setUserName('root'); 
		$this->assertNotEquals($var, $mainConnection->getUserName());
	}


	
	
    public function test3()
   	{
                $mainConnection = new mainConnection;
		$var = 'password';
		$mainConnection->setPassword('password');
		$this->assertEquals($var, $mainConnection->getPassword());
	}

	public function test4()
   	{
                $mainConnection = new mainConnection;
		$var = 'password';
		$mainConnection->setPassword('password'); 
		$this->assertNotEquals($var, $mainConnection->getPassword());
	}
	
	
	
	
	public function test5()
   	{
                $mainConnection = new mainConnection;
		$var = 'successful';
		$mainConnection->setLogIn('successful');
		$this->assertEquals($var, $mainConnection->getLogIn());
	}

	public function test6()
   	{
                $mainConnection = new mainConnection;
		$var = 'successful';
		$mainConnection->setLogIn('successful');
		$this->assertNotEquals($var, $mainConnection->getLogIn());
	}

}



