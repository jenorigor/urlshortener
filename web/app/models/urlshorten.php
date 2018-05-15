<?php
	
	/* This Class is used to create a shortened version for the url */

	class urlshorten {

		private $url;
		private $shortened_url;

		/* Constructor */
		public function __construct( $length = 5) {

			$this->shortened_url = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01234567890'), $length);

		}

		/* Setter */
		public function _set( $key , $value) {
			
			$this->$key = $value;

		}

		/* Getter */
		public function _get( $key = '') {

			return $this->key;
		
		}

	}

?>