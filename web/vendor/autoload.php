<?php
	
	
	
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	foreach (glob(dirname(__FILE__)."/../app/models/*.php") as $filename)
	{
		require $filename;
	}
	
	foreach (glob(dirname(__FILE__)."/../app/controllers/*.php") as $filename)
	{
		require $filename;
	}


?>