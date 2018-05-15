<?php
	
	/* This Class is used to connect to the database */
	class database {

		private $hostname;
		private $uname;
		private $password;
		private $database;
		private $con;

		/* Constructor */
		public function __construct() {}

		/* Connect Database */ 
		public function _connect() {

			$this->con = new mysqli($this->hostname, $this->uname, $this->password ,$this->database);

			if( $this->con->connect_error )  return false;
			
			else return true;

		}

		/* Select */
		public function _select( $shorturl ) {

			$sql = 'SELECT url FROM db_url WHERE shorturl = ? LIMIT 1';

			$stmt = $this->con->prepare($sql);
			$stmt->bind_param("s", $shorturl);

			$stmt->execute();

		    $urls = $stmt->get_result();

		    while ($shorturl = $urls->fetch_assoc()) {

		    	return $shorturl['url'];

		    }

		    return false;

		}

		/* Select */
		public function _insert( $url, $shorturl) {

			$sql = 'INSERT INTO db_url(url,shorturl) VALUES (?, ?)';
			
			$stmt = $this->con->prepare($sql);
			
			$stmt->bind_param("ss", $url, $shorturl);

			return $stmt->execute();

		}

		/* Setter */
		public function _set( $key , $value) {
			
			$this->$key = $value;

		}

		/* Getter */
		public function _get( $key = '') {

			return $this->$key;
		
		}


		/* Close SQL */
		public function _close () {

			mysqli_close($this->con);

		}

	}

?>