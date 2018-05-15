<?php

	class security {

		public function _URLisValid( $url ) {
			return !filter_var($url, FILTER_VALIDATE_URL) === FALSE;
		}

	}

?>