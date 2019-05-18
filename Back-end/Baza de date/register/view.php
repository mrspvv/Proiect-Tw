<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    

    <head>
        <meta charset="utf-8" />
        <title>FII Caffe</title>
        <meta name="description" content="Cafea Iasi, cafenea informatica">
        <link rel="stylesheet" href="loginstyle.css">
    </head>
    
    <body>
       <div class="container-login">
           <h1 class="autentificare">
               Creare cont
           </h1>
           <form method="post" action="controller.php">
               <div class="textbox">
                   <input type="text" placeholder="Nume" name="nume">
               </div>
               <div class="textbox">
                   <input type="text" placeholder="Prenume" name="prenume">
               </div>
               <div class="textbox">
                   <input type="text" placeholder="Nr. de telefon" name="nr_tel">
               </div>
               <div class="textbox">
                   <input type="password" placeholder="Parola" name="parola">
               </div>
               <div class="textbox">
                   <input type="password" placeholder="Confirmare parola" name="parola2">
               </div>
               <button type="submit" name="register">Inregistrare</button>
           </form>
        </div> 
    </body>
    
</html>
