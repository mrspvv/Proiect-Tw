<?php

require_once 'model.php';

session_start();

function preluare_date()
{
	$_SESSION['nr_tel'] = $_POST['nr_tel'];
	$_SESSION['parola'] = $_POST['parola'];
}

function validare()
{
	if(empty($_SESSION['nr_tel']) or empty($_SESSION['parola']))
	{
		$_SESSION['eroare'] = "Toate campurile sunt obligatorii!";
	}
	else
	{
		if(strlen($_SESSION['nr_tel']) == 10)
		{
			if(strlen($_SESSION['parola']) > 4)
	        {
           		$nr_linii = verifica_bd($_SESSION['nr_tel'], $_SESSION['parola']);
           		if($nr_linii == 0)
           		{
           			$_SESSION['eroare'] = "Nr. de telefon sau parola gresite!";
           		}
           		else
           		{
           			unset($_SESSION['eroare']);
           		}
	       	}
	       	else
	       	{
	       		$_SESSION['eroare'] = "Parola trebuie sa aiba minim 5 caractere!";
	       	}
		}
		else
		{
			$_SESSION['eroare'] = "Numar de telefon invalid!";
		}
	}
}

function logare()
{
	if(isset($_POST['login']))
	{
		preluare_date();
		validare();
		if(isset($_SESSION['eroare']))
		{
			echo $_SESSION['eroare'];
		}
		else
		{
			echo "Logat";
		}
	}
}

logare();

?>