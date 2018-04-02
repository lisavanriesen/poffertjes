<?php
require("dbconnect.php");
session_start();
 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="favicons.ico">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <title>PT</title>
    </head>

    <body>
        <?php include("menu.php") ?>
            <div id="slide01" class="slide fs">
                <div class="bcg"></div>
                <header class="wrapper">
                    <h1 class="title">Digitaal zefportret</h1>
                    <p>Bekijk mijn werk.</p>
                </header>
            </div>
            <article>
                <div class="wrappervak">
                    <h1>Digital Art</h1>
                    <h4>
        PROJECT PLANMAATIG AANGEPAKT, GEFASEERD TOT STAND GEKOMEN
            </h4>
                  
                    <section>
                    <p>In de inspiratie week heb ik er een hele week over gedaan om de techniek te beheersen om digitaal te kunnen kleuren. Deze portretweek ben ik hierin verder gegaan. Hier onder zie je mijn drie voltooide werken. Deze heb ik gemaakt door middel van illustrator en photoshop.
</p>
                       <img src="img/tijgertje.jpg">
                       <img src="img/meisje.jpg">
                       <img src="img/beergroen.jpg">
                 
                        <h4>Mijn held</h4>
                        <p> Wat je misschien niet direct ziet aan mijn werk is wie mijn held is. Of beter gezegt wie mijn helden zijn.
                        Iemand vinden die voor mij een held is was voor mij zeer moeilijk. Bij mij is het namelijk dat ik veel mensen een held vindt. Niet om wie ze zijn maar om wat ze doen. Mensen die uitdagingen aan gaan die buiten een comfort zone ligt is wat voor mij iemand een held maakt. Denk aan iemand die bang is om publiekelijk te praten en dan een pitch geef voor 100 mensen. Iemand die altijd gewend is om alleen te zijn, en dan naar een feestje gaat vol met mensen. Als ik het zo bekijk is bijna iedereen me held,dat klopt bij mij want iedereen heeft wel iets wat me inspireert.</p> 
                        
                    </section>
                    <section class="center">
                        <a class="button2" href="pdf/portretdoc_LisaM21t.pdf" target="_blank">
                            <p5>portret pdf</p5>
                        </a>
                        <br>
                        <br> </section>
                </div>
            </article>
           
                            <div class="center">
                                <header>
                                    <h1>comments</h1> </header>
                                <?php      
if(isset($_POST['submit']))
{   
	//data uit de input velden halen
    $name = $_SESSION['username'];
    
    $comment = trim($_POST['comment']);
    $comment = strip_tags($_POST['comment']);
    $comment = htmlspecialchars($_POST['comment']);
    
    //data adden aan de database
    $sql = ("INSERT INTO comments (name, comment, category)
        VALUES('{$name}', '{$comment}', 'PT')");
    if(mysqli_query($conn, $sql)){
    //Als comment succesvol is geplaatst bericht laten zien, anders de error
    $succes = "Je comment is succesvol geplaatst";
    } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

} 
    //comment verwijderen
    if(isset($_GET['delete']))
    {
        $delete_id = $_GET['delete'];
        $sql = "DELETE FROM comments WHERE id = '$delete_id'";
        mysqli_query($conn,$sql);
    }
?>
                                    <?php 
//comment halen uit database met categorie PT
$sql = ("SELECT * FROM comments WHERE category = 'PT' ORDER BY id ") ;
$result = mysqli_query($conn, $sql);
  
while ($row = mysqli_fetch_array($result))
{
    $name = $row['name'];
    $comment = $row['comment'];

?>
                                        <section>
                                            <p>
                                                <?php echo $comment; ?>
                                            </p>
                                            <p>gebruiker:
                                                <?php echo $name; ?>
                                            </p>
                                            <br>
                                            <hr class="line2">
                                            <br> </section>
                                        <?php 
}
?>
                                            <?php
    //als user is ingelogd laten zien
    if(isset($_SESSION['username'])){
    ?>
                                                <form class="wrapper" action="pt.php" method="POST">
                                                    <textarea class="textclass" name="comment" class="articletekst"></textarea>
                                                    <br>
                                                    <button class="button2 " type="submit" name="submit" class="commentbtn">Plaats comment</button>
                                                    <?php if(!empty($succes)): ?>
                                                        <br>
                                                        <p>
                                                            <?php echo $succes ?>
                                                        </p>
                                                        <?php endif; ?>
                                                </form>
                            </div>
                            <!-- .wrapper -->
                        </article>
                        <?php 
    } 
    ?>
    </body>

    </html>