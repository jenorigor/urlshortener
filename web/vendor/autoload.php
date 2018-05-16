<?php
	
	define('STATUS', 'development');

	switch(STATUS) {

		case 'production' : 

		ini_set('display_errors', 0);
		error_reporting(0);
		
		break;

		case 'development' :
		case 'default' :
		error_reporting(E_ALL);
		ini_set('display_errors', '1');

		break;

	}

	foreach (glob(dirname(__FILE__)."/../app/models/*.php") as $filename)
	{
		require $filename;
	}
	
	foreach (glob(dirname(__FILE__)."/../app/controllers/*.php") as $filename)
	{
		require $filename;
	}


?>
