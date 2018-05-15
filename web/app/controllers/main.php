<?php

class main {

	private $config = array();
	private $validator;
	

	/* Constructor */
	public function __construct() {
			
		$this->config = require dirname(__FILE__)."/../../config/config.php";

		$this->validator = new Security();

	}

	public function _initialize() {

		/* Check if POST is set */
		$json = json_decode(file_get_contents('php://input'));
		
		/* Shorten URL if url exists */
		if(isset($json->url)) {

			if($this->validator->_URLisValid($json->url)) {
				$shortenedurl = $this->_shortenurl($json->url);

				$valid = array();
				$valid ['success'] = true;
				$valid ['url'] = $this->config['domain'].'/'.$shortenedurl;

				echo json_encode($valid);
				return;

			}

			else {

				$invalid = array();
				$invalid['success'] = false;

				echo json_encode($invalid);
				return;

			}

		}

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


	private function _shortenurl( $url) {

		$shortenurl = new Urlshorten();
		$shortenurl->_set('url' , $url);

		return $shortenurl->_get('shortened_url');


	}


}


?>