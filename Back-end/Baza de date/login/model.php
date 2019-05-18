<?php

function verifica_bd($nr_tel, $parola)
{
	$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
	if(!$bd) 
	{
		die('Eroare la conectare ' . mysql_error());
	}
	$verificare = mysqli_query($bd, "SELECT * FROM clienti WHERE numar_telefon='$nr_tel'");
    $nr_linii = mysqli_num_rows($verificare);
    $bd->close();
    return $nr_linii;
}

?>