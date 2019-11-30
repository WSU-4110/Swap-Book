<?php

include_once __DIR__.'/../app/User.php'; 
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

	public function testConstruct () {
		$user = new \App\User ('Max','Arms','test@test.com','314', '8EightChars');
		$this->assertNotNull($user->getFirst());
		$this->assertNotNull($user->getUserName());
		$this->assertNotNull($user->getPass());
	}

	public function testSetFirst () { 
		$user = new \App\User ('Max','Arms','test@test.com','314','8EightChars');
		$user->setFirst('New');
		$this->assertEquals($user->getFirst(), 'New');
	}

	public function testSetUserName () { 
		$user = new \App\User ('Max','Arms','test@test.com','314', '8EightChars');
		$user->setUserName('new@new.com');
		$this->assertEquals($user->getUserName(), 'new@new.com');
	}

	public function testPassGood () {
		$user = new \App\User ('Max','Arms','test@test.com','314', '8EightChars');
		$this->assertTrue($user->passStrength('mock','8EightChars'));
	}

	public function testPassBad () {
		$user = new \App\User ('Max','Arms','test@test.com','314', '8EightChars');
		$this->assertFalse($user->passStrength('mock','badpw'));
	}

	public function testInsertReady () {
		$user = new \App\User ('Max','Arms','test@test.com','314', '8EightChars');
		$this->assertTrue($user->insert());
	}

}