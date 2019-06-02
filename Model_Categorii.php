<?php
	class Model {
	
		
		public function __construct() {
			session_start();
    	}
		
		public function get_count() {
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
				if(!$bd) 
					die('Eroare la conectare ' . mysql_error());
			$aux = 1;
		 	$interogare = $bd->query("select count(*) as ceva from categorii");
			while($row = mysqli_fetch_array($interogare)){
				$aux = $row['ceva'];
			}
			return $aux;
    	}
		
		public function get_poza () {
			$poze = array($this->get_count());
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
			$aux = 1;
			$parcurgere = 0;
		 	$interogare = $bd->query("select categorie, poza from categorii");
			while($row = mysqli_fetch_array($interogare)){
                $poze[$parcurgere] = array(2);
                $poze[$parcurgere][0] =  $row['categorie'];
                $poze[$parcurgere][1] =  $row['poza'];
				$parcurgere = $parcurgere + 1;
			}
			
			return $poze;
    	}
		
		
		
	}

?>