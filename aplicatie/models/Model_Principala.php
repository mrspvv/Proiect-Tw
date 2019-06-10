<?php
	class Model {
		public function __construct() {
    	}
		
		
		public function get_prajitura() {
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
		 	$interogare = $bd->query("select p.nume as nume, count(*) from produse p join comanda c on c.id_produs = p.id_produs and p.categorie = 'Prajituri'  group by nume   order by 2 desc");
			while($row = mysqli_fetch_array($interogare)){
				return $row['nume'];
			}
		}	
		
		public function get_bautura() {
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
		 	$interogare = $bd->query("select p.nume as nume, count(*) from produse p join comanda c on c.id_produs = p.id_produs and p.categorie not like 'Prajituri'  group by nume   order by 2 desc");
			while($row = mysqli_fetch_array($interogare)){
				return $row['nume'];
			}
		}
	}

?>