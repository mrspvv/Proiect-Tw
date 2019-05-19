<?php

function preluare_date()
{
	$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
    if(!$bd) 
    {
        die('Eroare la conectare ' . mysql_error());
    }
    $interogare = $bd->query("select * from produse where categorie = 'Cafea'");
    $_SESSION['interogare'] = $interogare;
}

?>