<?php
	class Model {
		public function __construct() {
		
    	}
		
		
		public function get_produse() {
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
			$parcurgere = 0;
		 	$interogare = $bd->query("select p.nume as nume, s.numar as numar from produse p join stoc s on s.id_produs = p.id_produs");
			while($row = mysqli_fetch_array($interogare)){
				
				$nume[$parcurgere] = array(2);
				$nume[$parcurgere][0] = $row['nume'];
				$nume[$parcurgere][1] = $row['numar'];
				$parcurgere = $parcurgere + 1;
			}
			
			return $nume;
    	}

	}

?>