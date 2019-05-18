<?php

require_once('model.php');

session_start();

function preluare_date()
{
	$_SESSION['nume'] = $_POST['nume'];
	$_SESSION['prenume'] = $_POST['prenume'];
	$_SESSION['nr_tel'] = $_POST['nr_tel'];
	$_SESSION['parola'] = $_POST['parola'];
	$_SESSION['parola2'] = $_POST['parola2'];
}

function validare()
{
		if(empty($_SESSION['nume']) or empty($_SESSION['prenume']) or empty($_SESSION['nr_tel']) or empty($_SESSION['parola']) or empty($_SESSION['parola2']))
	    {
	        $_SESSION['eroare'] = "Toate campurile sunt obligatorii!";
	    }
		else
		{
			if(strlen($_SESSION['nr_tel']) == 10) // si toate sunt cifre
			{
				$nr_linii = verifica_existenta($_SESSION['nr_tel']);

	            if($nr_linii > 0)
	            {
	            	$_SESSION['eroare'] = "Nr. de telefon utilizat la crearea altui cont!";
	            }
	            else
	            {
	            	if(strlen($_SESSION['parola']) > 4)
	            	{
	            		if($_SESSION['parola'] === $_SESSION['parola'])
		            	{
		            		unset($_SESSION['eroare']);
		            	}
		            	else
		            	{

		            		$_SESSION['eroare'] = "Parolele nu coincid!";
		            	}
	            	}
	            	else
	            	{
	            		$_SESSION['eroare'] = "Parola trebuie sa aiba minim 5 caractere!";
	            	}
	            }
			}
			else
			{
				$_SESSION['eroare'] = "Numar de telefon invalid!";
			}
		}
	}

	function inregistrare()
	{
		if(isset($_POST["register"]))
		{
			preluare_date();
			validare();
			if(isset($_SESSION['eroare']))
			{
				echo $_SESSION['eroare'];
			}
			else
			{
				adaugare($_SESSION['nume'], $_SESSION['prenume'], $_SESSION['nr_tel'], $_SESSION['parola']);
			}
		}
	}

	inregistrare();

?>