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
		 	$interogare = $bd->query("select count(*) as numar from mese");
			while($row = mysqli_fetch_array($interogare)){
				$aux = $row['numar'];
			}
			return $aux;
    	}
		
		public function get_date() {
			$nume = array($this->get_count());
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
			$parcurgere = 0;
		 	$interogare = $bd->query("select numar, status_masa from mese");
			while($row = mysqli_fetch_array($interogare)){
				
				$nume[$parcurgere] = array(2);
				$nume[$parcurgere][0] = $row['numar'];
				$nume[$parcurgere][1] = $row['status_masa'];
				$parcurgere = $parcurgere + 1;
			}
			
			return $nume;
    	}
		
		public function adauga_rezervare($nr, $id) {
            $bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
            if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
            $upd = "UPDATE mese SET status_masa = 'ocupat', id_client = '$id', data_modificare = CURRENT_TIMESTAMP  WHERE id_mese = '$nr'";
            $bd->query($upd);
            $bd->close();
            
   
        }
		
		
		
		
		
	}

?>