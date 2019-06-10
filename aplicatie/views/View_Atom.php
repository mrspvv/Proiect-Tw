<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>FII Caffe</title>
    <meta name="description" content="Restaurante cu specific italian">
    <link rel="stylesheet" href="stiljson.css">
    </head>
    
<body>
     <header class="meniu">
         <div class = "logo">
            <img src = "imagini/logo1.png" alt = "">
        </div>
         
        <nav class="linkuri-meniu">
            <ul>
                <li><a href="../apelari/Apelare_Principala.php"><p>Acasă</p></a></li>
                <li><a href="../apelari/Apelare_Rezervare.php"><p>Rezervare</p></a></li>
                <li><a href="../apelari/Apelare_Categorii.php"><p>Meniu</p></a></li>
                <li><a href="../apelari/desprenoi.php"><p>Despre noi</p></a></li>
				<li><a href="../apelari/Apelare_Stoc.php"><p>Stoc</p></a></li>
            </ul>
            <div class = "log"><a href = "../apelari/Apelare_Cont.php"><img src="imagini/logare.png" alt = ""></a> </div>
            <div class = "bon"><a href = "../apelari/Apelare_Nota.php"><img src="imagini/bon.png" alt = ""></a> </div>
        </nav>
    </header>
        
    <div class = "panou" align = "center">
		<p><?php 
			echo $nume->get_json();
			?></p>
    </div>

    
    <footer>
         <p> © Spînu Vasilică Ștefan, Muntean Cătălin-Tudor, 2019 </p>
    </footer>
    
</body>
</html>
