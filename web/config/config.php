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

		$db  = parse_url(getenv("CLEARDB_DATABASE_URL"));

		return array (
			'db_host' => $db["host"],
			'db_uname' => $db["user"],
			'db_pword' => $db["pass"],
			'db_schema' => substr($db["path"],1),
			'domain' => 'https://jrurlshortener.herokuapp.com'
		);

	}

?>
