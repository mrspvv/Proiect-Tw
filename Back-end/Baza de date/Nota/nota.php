<!DOCTYPE html>
<?php
require_once('controller_nota.php');
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <title>FIICaffe</title>
        <link rel="stylesheet" href="nota.css">
        
    </head>
    
    <body>
		
		<?php 
			vfCod();
		?>
		
        <header class="meniu">
         
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
        <div class="nota">
            <div class="titlu">
                <p align = "center"><u>Nota de plată</u></p>
            </div>

            <div class="produs">
                <div class="descriere">
                    <span>Gin-50 ml</span>
                </div>
                <div class="cantitate">
                    <span>1 buc.</span>
                </div>
                <div class="pret">
                    <span>8 lei</span>
                </div>
            </div>

            <div class="produs">
                <div class="descriere">
                    <span>Sprite</span>
                    <span>330 ml</span>
                </div>
                <div class="cantitate">
                    <span>1 buc.</span>
                </div>
                <div class="pret">
                    <span>4 lei</span>
                </div>
            </div>
            
            <div class="total">
                <p align = "right">Total: 12 lei</p>
            </div>
            
        </div>
		<button class="open-button" onclick="openForm()">Parasiti localul</button>

		<div class="form-popup" id="myForm">
		  <form class="form-container">
			<h1>Checkout</h1>

			<label for="email"><b>Introduceti codul oferit de casierita</b></label>
			<input type="text" placeholder="Enter Code" name="cod" required>


			<button type="submit" class="btn">Verificare</button>
			<button type="button" class="btn cancel" onclick="closeForm()">Inchide</button>
		  </form>
		</div>
    </body>
</html>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>