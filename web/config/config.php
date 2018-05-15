<?php

	if(STATUS == 'production') {

		return array (
			'database_host' => 'localhost',
			'database_uname' => 'root',
			'database_pword' => 'abc123',
			'database_schema' => 'jrurlshortener',
			'domain' => 'http://shortenurl.test'
		);
	}

	else {

		return array (
			'database_host' => 'us-cdbr-iron-east-04.cleardb.net',
			'database_uname' => 'bae64b4ce71f68',
			'database_pword' => '8f99cc3',
			'database_schema' => 'jrurlshortener',
			'domain' => 'https://jrurlshortener.herokuapp.com'
		);

	}

?>
