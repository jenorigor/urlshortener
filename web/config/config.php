<?php

	if(STATUS == 'production') {

		return array (
			'database_host' => '',
			'database_uname' => '',
			'database_pword' => '',
			'database_schema' => '',
			'domain' => 'http://shortenurl.test'
		);
	}

	else {

		return array (
			'database_host' => '',
			'database_uname' => '',
			'database_pword' => '',
			'database_schema' => '',
			'domain' => 'https://jrurlshortener.herokuapp.com'
		);

	}

?>