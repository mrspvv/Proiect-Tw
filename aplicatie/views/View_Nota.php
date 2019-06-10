<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>FII Caffe</title>
    <meta name="description" content="Restaurante cu specific italian">
    <link rel="stylesheet" href="stilnota.css">
    </head>
    
<body>
     <header class="meniu">
         <div class = "logo">
            <img src = "imagini/logo1.png" alt = "">
        </div>
         
        <nav class="linkuri-meniu">
            <ul>
                <li><a href="../home.php"><p>Acasă</p></a></li>
                
                <li><a href="../home/meniu.php"><p>Meniu</p></a></li>
                <li><a href="../home/desprenoi.php"><p>Despre noi</p></a></li>
				<li><a href="../home/stoc.php"><p>Stoc</p></a></li>	
            </ul>
            <div class = "log"><a href = "../home/cont.php"><img src="imagini/logare.png" alt = ""></a> </div>
            <div class = "bon"><a href = "../home/nota.php"><img src="imagini/bon.png" alt = ""></a> </div>
        </nav>
    </header>
        
    <div class = "panou" align = "center">
	  <?php if ($nume->get_nr() != 0) { ?>
      <ol class = 'titlu'>Nota de plata</ol>
	  <?php foreach($nume->get_produse() as $item) { ?>
	  <li class = 'element' ><?php echo $item[0];?> ............................ <?php echo $item[1];?></li>
	  <?php } ?>
	  <p class = 'pret' ><?php echo $nume->get_total()." lei"; ?></p>
		<?php } else echo $_SESSION['id_comanda']; ?>
    </div>

    
    <footer>
         <p> © Spînu Vasilică Ștefan, Muntean Cătălin-Tudor, 2019 </p>
    </footer>
    
</body>
</html>
