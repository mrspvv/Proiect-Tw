<?php

session_start();

require_once 'model_nota.php';

preluare_date();

function vfCod() {
		$aux = "1";
		$row = mysqli_fetch_array($_SESSION['interogare']);
		if(isset($_GET['cod']))
		{	
			if($_GET['cod'] == $row['cod']){
				header("Location: http://localhost/final%20la%20tw/Nota/multumiri.php");
				die();
			}	
		}
		
	}



?>