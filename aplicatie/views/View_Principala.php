<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>FII Caffe</title>
    <meta name="description" content="Cafea Iasi, cafenea informatica">
    <link rel="stylesheet" href="stilprincipala.css">
    </head>
    
<body>
    <header class="meniu">
        <div class = "logo">
            <img src = "imagini/logo1.png">
        </div>
         
        <nav class="linkuri-meniu">
            <ul>
                <li><a href="home.php"><p>Acasă</p></a></li>
                <li><a href="home/meniu.php"><p>Meniu</p></a></li>
                <li><a href="home/desprenoi.php"><p>Despre noi</p></a></li>
				<li><a href="home/stoc.php"><p>Stoc</p></a></li>	
            </ul>
            <div class = "test"><a href = "home/cont.php"><img src="imagini/logare.png" alt = ""></a> </div>
            <div class = "test1"><a href = "home/nota.php"><img src="imagini/bon.png" alt = ""></a> </div>
        </nav>
    </header>
        
    <div id = "content">
        <div class="clasa1">
            <img src="imagini/cafea4.jpg" align = "center" >
        </div>
        <div class="clasa2"><?php echo $nume->get_prajitura(); ?></div>
        <div class="clasa3">
            <h1>Bine ați venit</h1>
            <p>FIICaffe este locul preferat al studenților de la Facultatea de Informatică. Fie că vrei să te recreezi după o zi
                extenuantă de studiat, fie vrei să îți petreci timpul cu prietenii într-un local select, sau ai nevoie de o doză de energie,
                localul nostru este locul cel mai potrivit. Aici vei fi întâmpinat de condiții premium, muzică bună, dar mai ales, vei fi
                încojurat de oameni speciali.</p>
        </div>
        <div class="clasa4"><?php echo $nume->get_bautura(); ?></div>
    </div>
     <footer>
         <p> © Muntean Cătălin-Tudor, Spînu Vasilică Ștefan, 2019 </p>
    </footer>
	<div class = "widget">
		<div class="html"><a href = "home/filmul_ocuparii/html.php"><img src = "imagini/html.png"></a></div>
	<div class="atom"><img src = "imagini/atom.png"></div>
  	<div class="json"><a href = "home/filmul_ocuparii/json.php"><img src = "imagini/json1.png"></a></div>
	</div>
        
</body>
</html>