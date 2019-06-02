<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    

    <head>
        <meta charset="utf-8" />
        <title>FII Caffe</title>
        <meta name="description" content="Cafea Iasi, cafenea informatica">
        <link rel="stylesheet" href="loginstyle.css">
    </head>
    
    <body>
       <div class="container-login" align = "center">
           <h1 class="autentificare">
               Autentificare
           </h1>
           <div class="erori">
               <?php if(isset($_SESSION['eroare'])) echo $_SESSION['eroare']; ?>
           </div>
           <form method="post" action="">
               <div class="textbox">
                   <input type="text" placeholder="Nr. de telefon" name="nr_tel">
               </div>
               
               <div class="textbox">
                   <input type="password" placeholder="Parola" name="parola">
               </div>
               
               <button type="submit" name="login">Intra in cont</button>
           </form>
           
           <div class="cont-nou">
            <button onclick="location.href = 'creeazacont.html'">Cont nou</button>
           </div>
        </div> 
    </body>
    
</html>