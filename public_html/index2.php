<?php
session_start();
 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/core.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
        <script type="text/javascript" src="myscript.js"></script>
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lisa van Riesen</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link href="https://fonts.googleapis.com/css?family=Raleway:400,100|Roboto+Condensed:700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/styles.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
       
    </head>

    <body>
        <ul class="topnav">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="#frame2">Portfolio</a></li>
            <li><a href="about.php">Over mij</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php
  if(isset($_SESSION['username']))
  {
  ?>
                <li class="right"><a href="logout.php">Log uit</a></li>
                <div class="dropdown">
                    <button class="dropbtn">hi,
                        <?php echo $_SESSION["username"]; ?>
                            <div class="arrow-down"></div>
                    </button>
                    <div class="dropdown-content"> <a href="validate.php">Admin panel</a> <a href="deleteown.php" onclick="return confirm('Weet je het zeker?');">Deactiveer Account</a> </div>
                </div>
                <?php
} else
{

  ?>
                    <li class="right"><a href="regform.php">Registratie</a></li>
                    <li class="right"><a href="logform.php">Login</a></li>
                    <?php }
   ?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
       
    </head>
    <body class="is-loading">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="preloader">
            <div class="txt">
                <p class="txt-perc">0%</p>
                <div class="progress"><span></span></div>
            </div>
        </div>

        <div id="intro" class="header-container fs">
            <div class="bcg"></div>
            <header class="wrapper">
                <h1 class="title">Lisa van Riesen</h1>
                <p>Student Mediadesign en Webdevolpment</p>
            </header>
        
        </div>

        <nav>
            <ul>
                <li><a href="#intro"><span class="nav-dot"></span><span class="nav-label">Intro</span></a></li>
                <li><a href="#slide01"><span class="nav-dot"></span><span class="nav-label">Images</span></a></li>
                <li><a href="#slide02"><span class="nav-dot"></span><span class="nav-label">Position and Timing</span></a></li>
                <li><a href="#slide03"><span class="nav-dot"></span><span class="nav-label">Download</span></a></li>
            </ul>
        </nav>

        <div id="main" class="main-container">

            <article id="cb01" class="content-block">
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>SCO</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2"> sco is een vak dat je weet.</p>
                    </section>
                </div> <!-- .wrapper -->
            </article>
            
            <article id="slide01" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>A picture is worth a thousand words</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">lisaiscooool</p>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="cb02" class="content-block">
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>FOCUS</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">testjes
                        </p>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="slide02" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>Position</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Prthrtth time.</p>
                        <p class="slideInUp slideInUp3">Uryhdrthdtrl.</p>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="cb03" class="content-block">
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>ASK</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Yvklskrngsr</p>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="slide03" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                    <header class="slideInUp">
                        <a href="https://ihatetomatoes.net/blog/" title="Petr Tichy's Front End Development Blog">
                           
                        </a>
                   
                    </header>
                    <section>
                   

                    </section>
                </div> <!-- .wrapper -->
            </article>

        </div> <!-- #main-container -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
     
    </body>
</html>
