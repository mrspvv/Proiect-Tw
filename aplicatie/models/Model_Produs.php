<?php
	class Model {
		
		private $denumire;
		
		public function __construct(string $denum) {
			session_start();
			$this->denumire = $denum;
    	}
		
		
		public function get_date() {
			$poze = array(2);
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
			if(!$bd) 
				die('Eroare la conectare ' . mysql_error());
			$aux = 1;
			$parcurgere = 0;
		 	$interogare = $bd->query("select nume, pret, poza, descriere, categorie, id_produs from produse where nume = '$this->denumire'");
			while($row = mysqli_fetch_array($interogare)){
				$nume[0] = array(5);
				$nume[0][0] = $row['nume'];
				$nume[0][1] = $row['pret'];
				$nume[0][2] = $row['poza'];
				$nume[0][3] = $row['descriere'];
				$nume[0][4] = $row['categorie'];
                $nume[0][5] = $row['id_produs']; $_SESSION['id_produs'] = $nume[0][5];
			}
			
			return $nume;
    	}
		
		public function get_stoc(){
			$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
            if(!$bd) 
                 die('Eroare la conectare ' . mysql_error());
			$aux = $_SESSION['id_produs'];
			$interogare = $bd->query("SELECT numar from stoc where id_produs = '$aux'");
			$rezultat = 0;
			while($row = mysqli_fetch_array($interogare)){
				$rezultat = $row['numar'];
			}
            $bd->close();
			return $rezultat;
		}
		
		public function adauga_produs($comanda) {
            
                $bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
                if(!$bd) 
                    die('Eroare la conectare ' . mysql_error());
                $client = $_SESSION['id_client'];
                $produs = $_SESSION['id_produs'];

                //preia id-ul comenzii
                //$sql = $bd->query("SELECT MAX(id_comanda) AS REZ FROM comanda");
                //$result = mysqli_fetch_array($sql);
                //$_SESSION['id_comanda'] = $result['REZ'];

                //$comanda = $result['REZ'];

                
                $insert ="INSERT INTO `comanda` (`id_client`, `id_produs`, `id_comanda`) VALUES ('$client', '$produs', '$comanda')";
				$update = "UPDATE stoc SET numar = numar - 1 where id_produs = '$produs' ";
                mysqli_query($bd, $insert);
				mysqli_query($bd, $update);
                $bd->close();
            
        }
		
	}

?>