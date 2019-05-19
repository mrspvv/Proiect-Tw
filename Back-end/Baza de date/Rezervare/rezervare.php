<?php
require_once('controller.php');
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>FII Caffe</title>
        <meta name="description" content="Cafea Iasi, cafenea informatica">
        <link rel="stylesheet" href="rezervare.css" type="text/css" >
    </head>
    
    <body>
        <div class="mese" align = "center">
			<p class = "titlu">Filmul ocuparii</p>
            <ul class="lista">
				
                <?php
					afisare_mese();
				?>
            </ul>
        </div>
    </body>
</html>