<?php

function preluare_date()
{
	$bd = mysqli_connect('localhost', 'root', '', 'httpcaffe');
    if(!$bd) 
    {
        die('Eroare la conectare ' . mysql_error());
    }
    $interogare = $bd->query("select cod from note where id_client = 1");
    $_SESSION['interogare'] = $interogare;
}

?>