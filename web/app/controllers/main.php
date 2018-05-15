<?php

class main {

	private $config = array();

	/* Constructor */
	public function __construct() {
			
		$this->config = require dirname(__FILE__)."/../../config/config.php";

	}

	public function _initialize() {

		/* Check URI if needs redirection */
		$request = explode('/',$_SERVER['REQUEST_URI']);

		/* Know if URL has a string concatenate */
		if(sizeof($request) > 1 && isset($request[1]) && $request[1] != '') {

			/* If there is a string, retrieve url if it exists, then redirect */
			header("Location: https://www.pandoralabs.net");
			die();
		
		}

		else{

			/* If there are not strings */
			require dirname(__FILE__).'/../views/main-view.php';
			exit();
		}	



	}


	public function _shortenurl() {

		$request = file_get_contents('php://input');

		
	}


}


?>