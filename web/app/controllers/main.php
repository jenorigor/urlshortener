<?php

class main {

	private $config = array();
	private $validator;
	private $database;
	

	/* Constructor */
	public function __construct() {
			
		$this->config = require dirname(__FILE__)."/../../config/config.php";

		$this->validator = new Security();

		$this->database = new Database();

		$this->database->_set('hostname' , $this->config['db_host']);
		$this->database->_set('uname', $this->config['db_uname']);
		$this->database->_set('password', $this->config['db_pword']);
		$this->database->_set('database', $this->config['db_schema']);

		if(!$this->database->_connect()) {
			die();
		}

	
	}

	public function _initialize() {

		/* Check if POST is set */
		$json = json_decode(file_get_contents('php://input'));
		
		/* Shorten URL if url is valid */
		if(isset($json->url)) {

			if($this->validator->_URLisValid($json->url)) {
				$shortenedurl = $this->_shortenurl();

				if($this->db_insert($json->url, $shortenedurl)) {
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

			/* Find shortened url in database */
			$url = $this->db_select($request[1]);

			if($url) {
				/* If there is a string, retrieve url if it exists, then redirect */
				header("Location: ".$url);
				die();
			}

			else {
				header("Location: ".$this->config['domain']);
				die();
			}
		
		}

		else{

			/* If there are not strings */
			require dirname(__FILE__).'/../views/main-view.php';
			die();
		}	



	}


	private function _shortenurl() {

		$shortenurl = new Urlshorten();
		return $shortenurl->_get('shortened_url');


	}

	private function db_insert($url ,  $shortenedurl) {

		return $this->database->_insert($url, $shortenedurl);

	}	


	private function db_select($url) {

		return $this->database->_select($url);

	}

}


?>