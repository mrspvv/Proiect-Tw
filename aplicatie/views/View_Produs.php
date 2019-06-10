<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <title>FIICaffe</title>
        <link rel="stylesheet" href="produsstil.css">
        
    </head>
    
    <body>
        <header class="meniu">
            <div class = "logo">
                <img src = "imagini/logo1.png">
            </div>

            <nav class="linkuri-meniu">
            <ul>
                <li><a href="../../home.php"><p>Acasă</p></a></li>
                <li><a href="../../home/meniu.php"><p>Meniu</p></a></li>
                <li><a href="../../home/desprenoi.php"><p>Despre noi</p></a></li>
				<li><a href="../../home/stoc.php"><p>Stoc</p></a></li>
            </ul>
            <div class = "test"><a href = "../../home/cont.php"><img src="imagini/logare.png" alt = ""></a> </div>
            <div class = "test1"><a href = "../../home/nota.php"><img src="imagini/bon.png" alt = ""></a> </div>
        </nav>
        </header>
        
        <main class="container">
		<?php 
		 foreach($nume->get_date() as $item) { ?>
            <div class="stanga">
                <img src=<?php echo $item[2]; ?> alt = "">
            </div>
            <div class="dreapta">
                <div class="descriere">
                    <span><?php echo $item[4]; $_SESSION['categorie'] = $item[4]; ?></span>
                    <h1><?php echo $item[0]; ?></h1>
                    <p><?php echo $item[3]; ?></p>
                </div>
                <div class="pret">
                    <span><?php echo $item[1].' lei'; ?></span>
                    <form method="post" action="">
                        <input class="button" type="submit" name="comanda" value="Comandă">
                        <?php
                            $this->modifica_nota();
                            $this->trateaza_403();
                         ?>
                    </form>
                </div>
            </div>
		<?php } ?>
        </main>
        
    </body>
</html>