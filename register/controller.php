<?php

require_once('model.php');


class Controller {
	public $model;

	public function __construct()
	{
		session_start();
		$this->model = new Model();

	}

	public function invoke()
	{
		if($this->model->inregistrare() === 1)
		{
			echo "logat";	
		}
		else
		{
			include 'view.php';
		}
	}

	
}

?>