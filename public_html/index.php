<?php
session_start();
 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/core.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
        <script type="text/javascript" src="myscript.js"></script>
      
       <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicons.ico">
        <link rel="stylesheet" href="css/styles.css">


    </head>

       <body class="is-loading">
     

        <div id="preloader">
            <div class="txt">
                <p class="txt-perc">0%</p>
                <div class="progress"><span></span></div>
            </div>
        </div>
  <?php include("menu.php") ?>
      
        <div id="intro" class="header-container fs">
            <div class="bcg"></div>
            <header class="wrapper">
               <br>
                <h1 class="title">Lisa van Riesen</h1>
                <p> <b> Student media en illustrator.</b></p> 
                 <a href="mijnwerk.php" class="button3">bekijk mijn werk</a> 
                <div class="arrow animated bounce"></div>
            </header>
            
        </div>
  <div id="main" class="main-container">

            <article id="cb01" class="content-block">
                <div class="wrapper">
                    <header>
                        <h1>Welkom op mijn portfolio!</h1>
                    </header>
                    <section>
                        <p>"Part of creating is understanding that there is always more to do;<br> nothing is ever completely finished" - Rachel Lambert Mellon </p>
                          <div>
                            
                        </div>
                    </section>
                </div> <!-- .wrapper -->
            </article>
            
            <article id="slide01" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper" >
                    <header>
                        <a href="portret.php" class="button3">mijn portret</a>
                    </header>
                    
                </div> <!-- .wrapper -->
            </article>

            <article id="cb02" class="content-block">
                <div class="wrapper">
                    <header> 
                        <h1>SCO</h1>
                    </header>
                    <section>
                        <p >Leer meer over mijn proces!</p>
                          <div >
                            <a href="sco.php" class="button">Lees meer</a>
                        </div>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="slide02" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                    <header >
                     <h1>DED</h1>
                    </header>
                    <section>
                        <p >Bekijk hoe ik ben gegroeid in coderen.</p>
                        
                            <a href="ded.php" class="button2">Lees meer</a> 
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="cb03" class="content-block">
                <div class="wrapper">
                    <header >
                        <h1>UXU</h1>
                    </header>
                    <section>
                        <p >Zie hoe ik heb nagedacht over de eindgebruiker.</p>
                          <div>
                            <a href="ux.php" class="button">Lees meer</a>
                        </div>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="slide03" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                    <header>
                        
                        <h1>Proftaak</h1>
                    </header>
                    <section>
                        <p >Bekijk wat onze groep voor Syraforest heeft bereikt.</p>
                        <div >
                            <a href="pt.php" class="button">Lees meer</a>
                        </div>

                    </section>
                </div> <!-- .wrapper -->
            </article>
            

        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
               
            </footer>
        </div>
           

           <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

        <script src="js/main.js"></script>
    </body>

    </html>