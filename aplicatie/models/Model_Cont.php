<?php
	class Model {
		private $idul;
		public function __construct($com) {
			$this->idul = $com;
    	}
		
		
		public function get_produse() {
			$nume = array(1);
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
			$parcurgere = 0;
		 	$interogare = $bd->query("select nume, prenume, numar_telefon from clienti where id_client = '$this->idul'");
			while($row = mysqli_fetch_array($interogare)){
				
				$nume[0] = array(3);
				$nume[0][0] = $row['nume'];
				$nume[0][1] = $row['prenume'];
				$nume[0][2] = $row['numar_telefon'];
				$parcurgere = $parcurgere + 1;
			}
			
			return $nume;
    	}
		
	}

?>