<?php
	class Model {
		public function __construct() {
			//session_start();
    	}
		public function get_json() {
			$feed = implode(file('http://localhost/httpcaffe/atom.php'));
            $xml = simplexml_load_string($feed);
            $json = json_encode($xml);
            return $json;
    	}
		
	}

?>