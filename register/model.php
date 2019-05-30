<?php

class Model {
	public function inregistrare()
	{
		if(isset($_POST["register"]))
		{
			$this->preluare_date();
			$this->validare();
			if(isset($_SESSION['eroare']))
			{
                return 0;
				//echo $_SESSION['eroare'];
			}
			else
			{
				$this->adaugare($_SESSION['nume'], $_SESSION['prenume'], $_SESSION['nr_tel'], $_SESSION['parola']);
				return 1;
			}
		}
	}

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

	public function preluare_date()
	{
		$_SESSION['nume'] = $_POST['nume'];
		$_SESSION['prenume'] = $_POST['prenume'];
		$_SESSION['nr_tel'] = $_POST['nr_tel'];
		$_SESSION['parola'] = $_POST['parola'];
		$_SESSION['parola2'] = $_POST['parola2'];
	}

	public function validare()
	{
			if(empty($_SESSION['nume']) or empty($_SESSION['prenume']) or empty($_SESSION['nr_tel']) or empty($_SESSION['parola']) or empty($_SESSION['parola2']))
		    {
		        $_SESSION['eroare'] = "Toate campurile sunt obligatorii!";
		    }
			else
			{
				if(strlen($_SESSION['nr_tel']) == 10) // si toate sunt cifre
				{
					$nr_linii = $this->verifica_existenta($_SESSION['nr_tel']);

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
	}

?>
