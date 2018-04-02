<?php include ("dbconnect.php")?>
    <!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
        <link rel="icon" href="favicons.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Portfolio</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicons.ico">
        <link rel="stylesheet" href="css/styles.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
           <?php include("menu.php") ?>
        
        
        <article id="slide02" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                    
                        <h1>Inloggen</h1>
                    
                    <section>
                        
                        <form  method="POST" action="login.php">
                <label>
                    <input type="username" name="uname" required placeholder="Gebruikersnaam"> </label>
                <label>
                    <input type="password" name="psw"  placeholder="Wachtwoord"> </label>
                            <br>  
                         <input class= "button3" type="submit" name="login" value="Login"></form>
           
                    </section>
                </div> <!-- .wrapper -->
            </article>
        
         
                
        

       
            
            
    </body>

    </html>