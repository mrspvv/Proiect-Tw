<html>
    <head>
        <meta charset="utf-8" />
        <title>FII Caffe</title>
        <meta name="description" content="Cafea Iasi, cafenea informatica">
        <link rel="stylesheet" href="rezervare.css" type="text/css" >
    </head>
    
    <body>
        <div class="mese" align = "center">
			<p class = "titlu"><u>Filmul ocuparii</u></p>
            <ul class="lista">
			<?php foreach($nume->get_date() as $item) { ?>
			 <li><span>Masa <?php echo $item[0]; ?></span>
				 <span><?php echo $item[1]; ?></span>
				 <form method="post" action="" class = "butonas">
                        <input class="button" type="submit" name="<?php echo $item[0]; ?>" value="Rezerva">
                        <?php
                            if(isset($_POST[$item[0]]))
                                $this->adauga_rezervare($item[0]);
                         ?>
                    </form>
			</li>
			<?php }	?>
            </ul>
        </div>
    </body>
</html>