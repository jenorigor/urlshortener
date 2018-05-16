<?php
	
	/* This Class is used to create a shortened version for the url */

	class urlshorten {

		private $shortened_url;

		/* Constructor */
		public function __construct( $length = 7) {

			if(is_int($length))
			$this->shortened_url = $this->generateRandomString($length);

			else $this->shortened_url = $this->generateRandomString(7);
		}

		/* Setter */
		public function _set( $key , $value) {
			
			$this->$key = $value;

		}

		/* Getter */
		public function _get( $key = '') {

			return $this->$key;
		
		}

		/* Random String */ 
		private function generateRandomString($length = 7) {

		    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01234567890';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;

		}

	}

?>