<?php

class Model {

	


	public function verifica_user($nr_tel, $parola)
	{
        $nr_linii=0;
		$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
		if(!$bd) 
		{
			die('Eroare la conectare ' . mysql_error());
		}

		$nr_tel = $bd->real_escape_string($nr_tel);
		$parola = $bd->real_escape_string($parola);

		$verificare = $bd->prepare("SELECT id_client FROM clienti WHERE numar_telefon=? and parola=?");
        $verificare->bind_param('ss', $nr_tel, $parola);
        //$verificare->bindParam(':parola', $parola);
        $verificare->execute();
	    //$nr_linii = mysqli_num_rows($verificare);
        //preiau id
        $user = $verificare->get_result();
        while($row = $user->fetch_array())
        {
            if($user)
            {
                $_SESSION['id_client'] = $row['id_client'];
                $nr_linii=1;
            }
        }
        
	    $bd->close();
	    return $nr_linii;
	}

}

?>