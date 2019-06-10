<?php

require '../models/Model_Register.php';


class Controller {
	public $model;

	public function __construct()
	{
		session_start();
		$this->model = new Model();

	}

	public function invoke()
	{
		if($this->inregistrare() === 1)
		{
            $_SESSION['id_client'] = $this->model->preia_id();
            $_SESSION['id_comanda'] = $this->model->get_id_comanda();
			header("Location: ../home/rezervare.php");
            
		}
		else
		{
			include '../views/View_Register.php';
		}
	}
    
    public function inregistrare()
	{
		if(isset($_POST["register"]))
		{
			$this->preluare_date();
			$this->validare();
			if(isset($_SESSION['eroare']))
			{
                return 0;
			}
			else
			{
				$this->model->adaugare($_SESSION['nume'], $_SESSION['prenume'], $_SESSION['nr_tel'], $_SESSION['parola']);
				return 1;
			}
		}
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
                $_SESSION['nr_tel'] = filter_var($_SESSION['nr_tel'], FILTER_SANITIZE_NUMBER_INT);
				if(strlen($_SESSION['nr_tel']) == 10) // si toate sunt cifre
				{
					$nr_linii = $this->model->verifica_existenta($_SESSION['nr_tel']);

		            if($nr_linii > 0)
		            {
		            	$_SESSION['eroare'] = "Nr. de telefon utilizat la crearea altui cont!";
		            }
		            else
		            {
		            	if(strlen($_SESSION['parola']) > 4)
		            	{
		            		if($_SESSION['parola'] === $_SESSION['parola2'])
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
    
    public function afisare_erori()
    {
        if(isset($_SESSION['eroare'])) echo $_SESSION['eroare'];
    }

}

?>