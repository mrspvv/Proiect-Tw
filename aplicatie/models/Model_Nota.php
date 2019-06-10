<?php
	class Model {
		private $comanda;
		public function __construct() {
			//session_start();
			
			$this->comanda = $_SESSION['id_comanda'];
    	}
		
		public function get_count() {
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
				if(!$bd) 
					die('Eroare la conectare ' . mysql_error());
			$aux = 1;
		 	$interogare = $bd->query("select count(*) as numar from produse p join comanda c on c.id_produs = p.id_produs and c.id_comanda = '$this->comanda'");
			while($row = mysqli_fetch_array($interogare)){
				$aux = $row['numar'];
			}
			return $aux;
    	}
		
		public function get_nr() {
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
				if(!$bd) 
					die('Eroare la conectare ' . mysql_error());
			$aux = 1;
		 	$interogare = $bd->query("select count(*) as numar from comanda c where c.id_comanda = '$this->comanda'");
			while($row = mysqli_fetch_array($interogare)){
				$aux = $row['numar'];
			}
			return $aux;
		}
		
		public function get_produse() {
			$nume = array($this->get_count());
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
			$parcurgere = 0;
		 	$interogare = $bd->query("select p.nume as nume, p.pret as pret from produse p join comanda c on c.id_produs = p.id_produs and c.id_comanda = '$this->comanda'");
			while($row = mysqli_fetch_array($interogare)){
				
				$nume[$parcurgere] = array(2);
				$nume[$parcurgere][0] = $row['nume'];
				$nume[$parcurgere][1] = $row['pret'];
				$parcurgere = $parcurgere + 1;
			}
			
			return $nume;
    	}
		
		public function get_total() {
			$nume = array($this->get_count());
			$total = 0;
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
			$parcurgere = 0;
			$aux = $_SESSION['id_comanda'];
		 	$interogare = $bd->query("select p.pret as pret from produse p join comanda c on c.id_produs = p.id_produs and c.id_comanda = '$aux'");
			while($row = mysqli_fetch_array($interogare)){
				$total = $total +  $row['pret'];
			}
			
			return $total;
    	}
		
		
		
		
		
		
	}

?>