<?php

require '../models/Model_Login.php';


class Controller {
	public $model;

	public function __construct()
	{
		session_start();
		$this->model = new Model();

	}

	public function invoke()
	{
		if($this->logare() === 1)
		{
            $_SESSION['id_comanda'] = $this->model->get_id_comanda();
			header("Location: ../home/rezervare.php");
		}
		else
		{
			include '../views/View_Login.php';
		}
	}
    
    public function logare()
	{
		if(isset($_POST['login']))
		{
			$this->preluare_date();
			$this->validare_input();

			if(isset($_SESSION['eroare']))
			{
	            return 0;
			}
			else
			{
				return 1;
			}
		}
	}

    
    public function preluare_date()
	{
		$_SESSION['nr_tel'] = $_POST['nr_tel'];
		$_SESSION['parola'] = $_POST['parola'];
	}

	public function validare_input()
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
	           		$id_client = $this->model->verifica_user($_SESSION['nr_tel'], $_SESSION['parola']);
	           		if($id_client == 0)
	           		{
	           			$_SESSION['eroare'] = "Nr. de telefon sau parola gresite!";
	           		}
	           		else
	           		{
                        $_SESSION['id_client'] = $id_client;
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
    
    public function afisare_erori()
    {
        if(isset($_SESSION['eroare'])) echo $_SESSION['eroare'];
    }

	
}

?>