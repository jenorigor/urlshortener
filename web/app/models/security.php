<?php

	class security {

		public function _URLisValid( $url ) {
			return !empty($url) && !filter_var($url, FILTER_VALIDATE_URL) === FALSE;
		}


		public function xss_clean_url($url) {

			return htmlspecialchars(urldecode($url));

		}

	}

?>