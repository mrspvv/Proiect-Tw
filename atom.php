<?php

$bd = mysqli_connect('localhost','root','','httpcaffe');
if(!$bd)
{
	die("Eroare la conectare " . mysqli_error());
}

$sql = $bd->query("SELECT * FROM mese");

?>

<feed xml:lang="en-US" xmlns="http://www.w3.org/2005/Atom"> 
     <title>Filmul ocuparii meselor</title> 
     <link href="" rel="self"/> 
     <updated><?php  echo date('Y-m-d\TH:i:s\Z'); ?></updated>
     <author> 
          <name>Muntean Catalin</name>
          <email>catalintudor_muntean@yahoo.ro</email>
     </author>
     <id>
     	http://localhost/tw/Project/apelari/Apelare_Rezervare.php
     </id>

<?php

while($row = mysqli_fetch_array($sql))
{
	$data_modificare = $row['data_modificare'];

	echo "<entry>";
	echo "<title>";
		echo "Masa nr. " . $row["id_mese"];
	echo "</title>";
	echo "<id>";
		echo "http://localhost/tw/Project/apelari/Apelare_Rezervare.php";
	echo "</id>";
	echo "<updated>";
		echo $data_modificare;
	echo "</updated>";
    echo "<summary>";
        echo "status: " . $row['status_masa'];
    echo "</summary>";
    echo "</entry>\n";

}
?>

</feed>