<?php

class Model {
	

	function verifica_existenta($nr_tel)
	{
		$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
		if(!$bd) 
		{
			die('Eroare la conectare ' . mysql_error());
		}
		$existent =$bd->prepare("SELECT count(*) as nr FROM clienti WHERE numar_telefon=?");
        $existent->bind_param('s', $nr_tel);
        $existent->execute();
        $user = $existent->get_result();
        $row = $user->fetch_array();
        $nr_linii = $row['nr'];
	    
        $bd->close();
	    return $nr_linii;
    }
	    

	function adaugare($nume, $prenume, $nr_tel, $parola)
	{
		$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
		if(!$bd) 
		{
			die('Eroare la conectare ' . mysql_error());
		}
		$insert = $bd->prepare("INSERT INTO `clienti` (`id_client`, `nume`, `prenume`, `parola`, `numar_telefon`) VALUES (null, ?, ?, ?, ?)");
        $insert->bind_param('ssss', $nume, $prenume, $parola, $nr_tel);
        $insert->execute();
        
	    $bd->close();
	}
    
    public function preia_id()
    {
        $bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
        if(!$bd) 
			die('Eroare la conectare ' . mysql_error());            
        $sql = mysqli_query($bd, "select max(id_client) as id from clienti");
        while($row = mysqli_fetch_array($sql))
        {
            $q = $row['id'];
        }
        return $q;
    }
    
    public function get_id_comanda()
    {
        $bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
        if(!$bd) 
			die('Eroare la conectare ' . mysql_error());            
        $sql = $bd->query("select max(id_comanda) as id from comanda");
        while($row = mysqli_fetch_array($sql))
        {
            $q = $row['id'];
        }
        $q++;
        return $q;
    }
}
	

?>