<?php
	class Model {
		public function __construct() {
			//session_start();
    	}
		public function get_json() {
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
			$aux = 1;
			$interogare = $bd->query("select * from mese");
			while($row = mysqli_fetch_array($interogare)){
				$arr[$row['numar']] = $row["status_masa"];
			}
			$file = 'test.json';
			file_put_contents($file, json_encode($arr));
			return json_encode($arr);
    	}
		
	}

?>