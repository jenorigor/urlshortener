<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class databasetest extends TestCase {
	
	public function testdatabaseconnection(){

		$db = new database();
		$db->_set('hostname' , 'localhost');
		$db->_set('uname' , 'root');
		$db->_set('password' , 'abc123');
		$db->_set('database' , 'jrurlshortener');

		$this->assertTrue($db->_connect());

	}

	public function testinvaliddatabaseconnection(){

		$db = new database();
		$db->_set('hostname' , 'localhost');
		$db->_set('uname' , 'abcdefghijklmnopqrstuv');
		$db->_set('password' , 'abcdefghijklmnopqrstuv' );
		$db->_set('database' , 'abcdefghijklmnopqrstuv');

		$this->assertFalse($db->_connect());

	}

	public function testnodatabaseconnection(){

		$db = new database();

		$this->assertFalse($db->_connect());

	}

	public function testselectdatabase(){

		$db = new database();
		$db->_set('hostname' , 'localhost');
		$db->_set('uname' , 'root');
		$db->_set('password' , 'abc123');
		$db->_set('database' , 'jrurlshortener');

		$db->_connect();

		$this->assertSame( 'https://www.w3schools.com/tags/tag_meta.asp', $db->_select( 'DQGDfw66' ) ) ;
	}

	public function testinvalidselectdatabase(){

		$db = new database();
		$db->_set('hostname' , 'localhost');
		$db->_set('uname' , 'root');
		$db->_set('password' , 'abc123');
		$db->_set('database' , 'jrurlshortener');

		$db->_connect();

		$this->assertFalse( $db->_select( rand() ) ) ;
	}


	public function testinsertdatabase(){

		$db = new database();
		$db->_set('hostname' , 'localhost');
		$db->_set('uname' , 'root');
		$db->_set('password' , 'abc123');
		$db->_set('database' , 'jrurlshortener');

		$db->_connect();

		$this->assertTrue( $db->_insert('testurl' , 'testurl' ))  ;
	}


}

?>