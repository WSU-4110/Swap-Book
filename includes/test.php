<?php
require 'mainConnection.php';
use PHPUnit\Framework\TestCase;

class myTest extends TestCase{

         public function testOne()
   	{
                $mainConnection = new mainConnection;
		$var = 'localhost';
		$mainConnection->setServerName('localhost');
		$this->assertEquals($var, $mainConnection->getServerName());
	}

	public function testTwo()
   	{
                $mainConnection = new mainConnection;
		$var = 'localhost';
		$mainConnection->setServerName('localhost');
		$this->assertNotEquals($var, $mainConnection->getServerName());
	}


        public function testThree()
   	{

                $mainConnection = new mainConnection;
		$var = 'swapbook';
		$mainConnection->setDatabaseName('swapbook');
		$this->assertEquals($var, $mainConnection->getDatabaseName());
	}

	public function testFour()
   	{
                $mainConnection = new mainConnection;
		$var = 'swapbook';
		$mainConnection->setDatabaseName('swapbook');
		$this->assertNotEquals($var, $mainConnection->getDatabaseName());
	}


         public function testFive()
   	{
                $mainConnection = new mainConnection;
		$var = 'successful';
		$mainConnection->setSearchBoxResult('successful');
		$this->assertEquals($var, $mainConnection->getSearchBoxResult());
	}

	public function testSix()
   	{
                $mainConnection = new mainConnection;
		$var = 'successful';
		$mainConnection->setSearchBoxResult('successful');
		$this->assertNotEquals($var, $mainConnection->getSearchBoxResult());
	}
 
}




