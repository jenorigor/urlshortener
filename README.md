# urlshortener
This project built on PHP aims to shorten long or lengthy URLs. This can be run or deployed on your Heroku Account.

# Getting Started
This application needs PHP and MYSQL to work. The configuration file , config.php, can be found in the directory /web/config/. Update the necessary credentials for your MySQL Database for this to work. 

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

As you can see in the configuration file, depending on the Status (Production or Development), a configuration file will be returned. The production configuration should be run on the Heroku cloud. To change the STATUS, update the autoload.php file found in the directory web/vendor.


