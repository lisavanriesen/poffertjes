<?php
include("dbconnect.php");
session_start();

$sql = "SELECT id, username, user_level FROM users";
$result = $conn->query($sql);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="favicons.ico">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <title>Dashboard</title>
        <script>
        </script>
    </head>

    <body>
    <?php include("menu2.php") ?>
        <main role="main">
        
        
            <article id="slide04" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                
                        <h1>HELLO ADMIN!</h1>
                           <p ><?php

                        $ip = $_SERVER['REMOTE_ADDR'];
                        echo "Ip-Adress: ".$ip."<br>";

                        ?></p>
                    
                   
                </div> <!-- .wrapper -->
            </article>
     
        
                
        
        </main>
    </body>

    </html>