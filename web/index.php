
<?php
	/* This File initializes the project and loads all the needed config, controllers and models */
	require dirname(__FILE__).'/vendor/autoload.php';
	
	$maincontroller = new Main();
	$maincontroller->_initialize();


?>