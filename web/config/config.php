<?php

	if(STATUS !== 'production') {

		return array (
			'db_host' => 'localhost',
			'db_uname' => 'root',
			'db_pword' => 'abc123',
			'db_schema' => 'jrurlshortener',
			'domain' => 'http://shortenurl.test'
		);
	}

	else {

		return array (
			'db_host' => 'us-cdbr-iron-east-04.cleardb.net',
			'db_uname' => 'bae64b4ce71f68',
			'db_pword' => '8f99cc3',
			'db_schema' => 'jrurlshortener',
			'domain' => 'https://jrurlshortener.herokuapp.com'
		);

	}

?>
