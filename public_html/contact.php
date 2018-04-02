<?php
session_start();
 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
                <link rel="icon" href="favicons.ico">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <title>Contact</title>
    </head>

    <body>
        <?php include("menu.php") ?>
 <article id="slide02" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                <h1>Contact</h1>
                    <p> Hebt u meer vragen, vul dan hieronder het contactformulier in!
                        <br> Dan neem ik zo snel mogelijk contact met u op. </p>
                   
                                       <section>
 
           
                <form action="mailer.php" method="post"  enctype="multipart/form-data">
                    
                    <input name="name" id="name" required="required" placeholder="Volledige naam">

                    <input name="email" id="email" type="email" required="required" placeholder="Email">
  
                    <textarea name="message" id="message" cols="40" rows="5" required="required" placeholder="Type hier je bericht!"></textarea>
                 
                    <input class= "button3" id="submit" name="submit" type="submit" value="Submit"> </form>
                    </section>
          
        </div> <!-- .wrapper -->
            </article>
     
    </body>

    </html>