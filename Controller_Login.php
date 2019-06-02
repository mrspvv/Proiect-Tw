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
			header("Location: ../apelari/Apelare_Categorii.php");	
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
	           		$nr_linii = $this->model->verifica_user($_SESSION['nr_tel'], $_SESSION['parola']);
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

	
}

?>