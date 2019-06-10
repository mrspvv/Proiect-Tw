<?php
    session_start();
    $aux = $_SESSION['id_comanda'];
    modifica_masa();
    //session_destroy();
    header('Location: login.php');

    function modifica_masa()
    {
        $bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
		if(!$bd) 
		{
			die('Eroare la conectare ' . mysql_error());
		}
        $id_client = $_SESSION['id_client'];
        echo $id_client;
        $sql = "UPDATE mese SET status_masa = 'liber', id_client = '0', data_modificare = CURRENT_TIMESTAMP  WHERE id_client = $id_client";
        mysqli_query($bd, $sql);
        mysqli_close($bd);
    }
?>