<?php

function verifica_existenta($nr_tel)
{
	$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
	if(!$bd) 
	{
		die('Eroare la conectare ' . mysql_error());
	}
	$existent = mysqli_query($bd, "SELECT * FROM clienti WHERE numar_telefon='$nr_tel'");
    $nr_linii = mysqli_num_rows($existent);
    return $nr_linii;
    $bd->close();
}

function adaugare($nume, $prenume, $nr_tel, $parola)
{
	$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
	if(!$bd) 
	{
		die('Eroare la conectare ' . mysql_error());
	}
	$insert = "INSERT INTO `clienti` (`id_client`, `nume`, `prenume`, `parola`, `numar_telefon`) VALUES (null, '$nume', '$prenume', '$parola', '$nr_tel')";
    $bd->query($insert);
    $bd->close();
}

?>