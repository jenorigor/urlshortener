<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class securitytest extends TestCase {
	
	public function testvalidurl(){

		$valid = new security();
		$this->assertTrue($valid->_URLisValid('http://pandoralabs.net'));

	}

	public function testinvalidurl(){

		$valid = new security();
		$this->assertFalse($valid->_URLisValid('testinvalidurl/test'));

	}

	public function testemptyurl(){

		$valid = new security();
		$this->assertFalse($valid->_URLisValid(null));

	}

	public function testxssclearnurl(){

		$valid = new security();
		$this->assertSame('http://pandoralabs.net?test=&lt;script&gt;alert(1)&lt;/script&gt;',$valid->xss_clean_url('http://pandoralabs.net?test=<script>alert(1)</script>'));

	}

}

?>