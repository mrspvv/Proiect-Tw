<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>FII Caffe</title>
    <meta name="description" content="Cafea Iasi, cafenea informatica">
    <link rel="stylesheet" href="stylemeniu.css">
    </head>
    
<body>
    <header class="meniu">
         <div class = "logo">
            <img src = "imagini/logo1.png">
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
    <div id = "content">
		 <?php 
		 $casuta = 0;
		 foreach($poze->get_poza() as $item) { 
			 if($casuta == 0){
				$produs = "'prod1'";
				$casuta = $casuta + 1;
			 }
			 else
				if($casuta == 1){
				$produs = "'prod2'";
				$casuta = $casuta + 1;
			 }
			 else
				 if($casuta == 2){
				$produs = "'prod3'";
				$casuta = $casuta + 1;
			 }
			 else
				 if($casuta == 3){
				$produs = "'prod4'";
				$casuta = 0;
			 }
		?>
        <div class= <?php echo $produs; ?> ><a href="categorie.php?categorie=<?php echo $item[0]; ?>"><img src=<?php echo $item[1]; ?> align = "center" alt = ""></a></div>
        <?php } ?>
    </div>
     <footer>
         <p> © Muntean Cătălin-Tudor, Spînu Vasilică Ștefan, 2019 </p>
    </footer>
        
</body>
</html>