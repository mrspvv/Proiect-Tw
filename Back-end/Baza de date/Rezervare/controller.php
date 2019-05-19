<?php

session_start();

require_once 'model.php';

preluare_date();

function afisare_mese()
{
	$legatura = "index.html";
	$clasa = "off";
	while($row = mysqli_fetch_array($_SESSION['interogare'])){
			if ($row['status_masa'] == "liber")
				  echo "<li><span>Masa ".$row['numar']."</span><span>".$row['status_masa']."</span><a href=".$legatura."><button>Rezervă</button></a></li>";
			else
				  echo "<li><span>Masa ".$row['numar']."</span><span>".$row['status_masa']."</span><a href=".$legatura."><button class = ".$clasa.">Rezerva</button
				  ></a></li>";
	}
}



?>