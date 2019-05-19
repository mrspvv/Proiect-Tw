<?php

session_start();

require_once 'model.php';

preluare_date();

function afisare_produse()
{
	
	$bloc = 0;
	$arg0 = "call-outs-container";
    while($row = mysqli_fetch_array($_SESSION['interogare'])){
			  if ($bloc == 0){
				  echo "<div class=".$arg0.">";
			  }
			  else
				  if ($bloc % 3 == 0){
					  echo "</div><div class=".$arg0.">";
				  }
           	  $arg = "produs";
			  $arg1 = "content";
			  $arg2 = "clasa1";
			  $arg3 = "clasa2";
		      $arg4 = "box";
			  $poz = "imagini/Produse/fanta.png";
			  echo "<div class=".$arg."><div class= ".$arg1."><div class=".$arg2."><div class=".$arg4."><img src=".$row['poza']."></div></div><div class=".$arg3."><h1>".$row['nume']."</h1><p>".$row['pret']." lei </p></div></div></div>";

			  $bloc = $bloc + 1;
		}
	
	 echo "</div>";
}



?>