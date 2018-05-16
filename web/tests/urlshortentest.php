<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class urlshortentest extends TestCase {
	
	public function testsizeofURL(){

		$num = 10;
		$url = new urlshorten($num);
		$this->assertSame($num, strlen($url->_get('shortened_url')));

	}

	public function testinvalidsizeofURL(){

		$num = 'invalid';
		$url = new urlshorten($num);
		$this->assertSame(7, strlen($url->_get('shortened_url')));

		
	}


}

?>