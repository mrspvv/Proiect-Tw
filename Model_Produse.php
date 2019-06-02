<?php
	class Model {
		
		private $categorie;
		
		public function __construct(string $categ) {
			session_start();
			$this->categorie = $categ;
    	}
		
		public function get_count() {
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
				if(!$bd) 
					die('Eroare la conectare ' . mysql_error());
			$aux = 1;
		 	$interogare = $bd->query("select count(*) as ceva from produse where categorie = '$this->categorie'");
			while($row = mysqli_fetch_array($interogare)){
				$aux = $row['ceva'];
			}
			return $aux;
    	}
		
		public function get_nume() {
			$nume = array($this->get_count());
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
			$aux = 1;
			$parcurgere = 0;
		 	$interogare = $bd->query("select nume, pret, poza from produse where categorie = '$this->categorie'");
			while($row = mysqli_fetch_array($interogare)){
				$nume[$parcurgere] = array(1);
				$nume[$parcurgere][0] = $row['nume'];
				$nume[$parcurgere][1] = $row['pret'];
				$nume[$parcurgere][2] = $row['poza'];
				$parcurgere = $parcurgere + 1;
			}
			
			return $nume;
    	}
		

		
		
		
	}

?>