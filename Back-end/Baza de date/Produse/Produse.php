<!DOCTYPE html>
<?php
require_once('controller.php');
?>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>FII Caffe</title>
    <meta name="description" content="Cafea Iasi, cafenea informatica">
    <link rel="stylesheet" href="Produse.css">
    </head>
    
<body>
   <header class="meniu">
        <div class = "logo">
            <img src = "imagini/logo1.png" alt = "">
        </div>
         
        <nav class="linkuri-meniu">
            <ul>
                <li><a href="index.html"><p>Acasă</p></a></li>
                <li><a href="login.html"><p>Rezervare</p></a></li>
                <li><a href="Bauturi.html"><p>Băuturi</p></a></li>
                <li><a href="Meniu.html"><p>Meniu</p></a></li>
                <li><a href="desprenoi.html"><p>Despre noi</p></a></li>
            </ul>
            <div class = "log"><a href = "login.html"><img src="imagini/logare.png" alt = ""></a> </div>
            <div class = "bon"><a href = "nota.html"><img src="imagini/bon.png" alt = ""></a> </div>
        </nav>
    </header>
    
        
    <?php 
	
		afisare_produse();
		
	?>
    
    
    
     <footer>
         <p> © Muntean Cătălin-Tudor, Spînu Vasilică Ștefan, 2019 </p>
    </footer>

        
        
</body>
</html>