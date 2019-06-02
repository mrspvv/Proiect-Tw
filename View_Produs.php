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
                    <li><a href="index.html"><p>Acasă</p></a></li>
                    <li><a href="login.html"><p>Rezervare</p></a></li>
                    <li><a href="Bauturi.html"><p>Băuturi</p></a></li>
                    <li><a href="Meniu.html"><p>Meniu</p></a></li>
                    <li><a href="desprenoi.html"><p>Despre noi</p></a></li>
                </ul>
                <div class = "test"><a href = "login.html"><img src="imagini/logare.png" alt = ""></a> </div>
                <div class = "test1"><a href = "nota.html"><img src="imagini/bon.png" alt = ""></a> </div>
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
                    <span><?php echo $item[4]; ?></span>
                    <h1><?php echo $item[0]; ?></h1>
                    <p><?php echo $item[3]; ?></p>
                </div>
                <div class="pret">
                    <span><?php echo $item[1].' lei'; ?></span>
                    <form method="post" action="">
                        <input class="button" type="submit" name="comanda" value="Comandă">
                        <?php 
             $this->modifica_nota(); ?>
                    </form>
                </div>
            </div>
		<?php } ?>
        </main>
        
    </body>
</html>