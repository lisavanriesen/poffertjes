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
            <div id="slide10" class="slide fs">
                <div class="bcg"></div>
                <header class="wrapper">
                    <h1 class="title">PROFTAAK</h1>
                    <p>Syraforest Branding.</p>
                </header>
            </div>
            <article>
                <div class="wrappervak">
                    <h1>Rubrics</h1>
                    <h4>
        PROJECT PLANMAATIG AANGEPAKT, GEFASEERD TOT STAND GEKOMEN
            </h4>
                    <section>
                        <p> Om dit leerdoel aan te tonen hebben wij als groep meerdere dingen er aan gedaan om te zorgen dat de aanpak voor de proftaak goeg gepland en aangepakt was.</p>
                        <h4> Trello</h4>
                        <p>Elke week werd er via trello bij gehouden wie wat deze week moest doen. Zo kon iedereen ook van elkaar zien wat ze deden en wanneer het af moest zijn.</p><img src="img/trello.png">
                        <h4>Vergaderingen</h4>
                        <p>Om te weten wat er de werkweek aan de proftaak gedaan moest worden, werd er elke maandag een vergadering gehouden. Tijdens deze vergaderingen hadden we een notulist (Marijn) die bij hield wie wat moest doen en wat er nog afgemaakt moest worden.</p> 
                        <h4>Verbeteringen voor de toekomst</h4>
                        <p>In de toekomst zou ik graag willen dat er aan het begin van het jaar duidelijkere afspraken worden gemaakt, zoals wat er van je wordt verwacht als je er niet bent. Ook zou het handig zijn om in het samenwerkings contract vast te stellen dat proftaak dagen uitsluitend zijn voor proftaak gerelateerd werk.</p>
                    </section>
                    <section class="center">
                        <a class="button2" href="pdf/AlleNotulenFront.pdf" target="_blank">
                            <p5>Notulen pdf</p5>
                        </a>
                        <br>
                        <br> </section>
                </div>
            </article>
            <hr class="line2">
            <article>
                <div class="wrappervak">
                    <h4>
PRODUCT- &amp; PROCESVERANTWOORDING METHODISCHS EN ONDERBOUWD
            </h4> <img src="">
                    <section>
                        <p>Deze rubrik is aan te tonen door het product proces verslag, hier in staat alles beschreven waarom we het hebben gedaan en welke onderzoekstrategie is gebruikt. </p>
                        
                    </section>
                    <section class="center">
                        
                        <a class="button2" href="pdf/ppverslag-02.pdf" target="_blank">
                            <p5>productprocessverslag pdf</p5>
                        </a>
                        <br>
                        <br> </section>
                </div>
            </article>
            <hr class="line2">
            <article>
                <div class="wrappervak">
                    <h4> PRODUCTPRESENTATIE OVERTUIGEND, INSPIREREND
            </h4> <img src="">
                    <section>
                        <p>Met presenteren en het voorleggen van idee&uml;en heb ik geen problemen met het verder uitleggen van het onderwerp dat ik presenteer. Ik vindt presenteren voor grote groepen wel nog eng, maaar ik probeer zo duidelijk mogelijk te spreken en met kleine handgebaren mijn presentatie te versterken. Ook probeer ik altijd vragen goed te beantwoorden. De opmaak van presentaties werden meestal door Axel gedaan. Wat ik in de toekomst beter wil doen is niet zo bang zijn om voor een groep te staan. </p>
                      
                    </section>
                   <br><br>
                </div>
            </article>
            <hr class="line2">
            <article>
                <div class="wrappervak">
                    <h4>
SAMENWERKING
            </h4> <img src="">
                    <section>
                        <p>Volgens mij ging de samenwerking tussen mij en de groep goed. Deze rubrik kan ik het best aantonen met de peerreviews van de proftaak, hieronder zie je wat mijn groepsgenoten van mijn samenwerking vonden. In de toekomst wil ik echter wel grotere taken op mij nemen in plaats van kleine opdrachten en helpen waar het nodig is.</p>
                        <br>
                        <p> " Met lisa kun je goed samenwerken. Wanneer je hulp nodig hebt, zal ze je meteen helpen. Lisa houdt zich vrijwel altijd aan haar afspraken. Goed bezig dus! " </p>
                        <h4>-Mitch Muscus</h4>
                        <br>
                        <p> " Lisa communiceert veel met de groep en vraagt om feedback op haar producten. Ze neemt af en toe initiatief maar lijkt het fijn te vinden als ze een duidelijke opdracht toegewezen krijgt. " </p>
                        <h4>-Marijn van der Sanden</h4>
                        <br>
                        <p> "Werkt goed samen, doet goed mee met vergaderingen. Helpt op het laatste moment om het werk klaar te krijgen. Staat klaar voor de groep. " </p>
                        <h4>-Axel Hensen</h4>
                        <br>
                        <p> "Werkt goed samen. " </p>
                        <h4>-Hylke de Witte</h4>
                        <br>
                        <p> "Werkt goed samen. Zoals ik al zei bied ze ook altijd hulp aan wanneer iemand dit nodig heeft. Ook toont ze interesse in andermans werk. Komt afspraken goed na. Ze is altijd op tijd en aanwezig, en levert opdrachten op tijd in. " </p>
                        <h4>-Larissa Snels</h4> </section>
                    <section class="center">
                        <a class="button2" href="pdf/Peerreviews%20apart.pdf" target="_blank">
                            <p5>peerreview pdf</p5>
                        </a>
                        <br>
                        <br> </section>
                </div>
            </article>
            <hr class="line2">
                <br> 
            <h2 class="center">Overige Opdrachten</h2>
            <?php 
//selecteer alles van artikel met category PT  en met een while loop laat ie het op de website zien
$sql = ("SELECT * FROM artikel WHERE category = 'PT' ORDER BY id DESC") ;
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result))
{
    $title = $row['name'];
    $description = $row['description'];
    $imagedata = $row['image'];
    $pdf = $row['pdf'];
    $content = $row['content'];
    $time = $row['time'];
?>
                <!-- laat de titel beschrijving en content zien, het plaatje word ook uit de database gehaald -->
                <article>
                    <div class="wrappervak">
                        <header>
                            <h4>
        <?php echo $title; ?>
            </h4> </header>
                        <p>
                            <?php echo $description; ?>
                        </p>
                        <br>
                        <br>
                        <?php 
              echo '<img  src="data:image/jpeg;base64,' . base64_encode($imagedata) . '">' ?>
                            <p>
                                <?php echo $content; ?>
                            </p>
                    </div>
                    <br>
                    <section class="center">
                        <?php echo $time; ?>
                            <br>
                            <br>
                            <?php if(mysqli_num_rows($pdf) > 0){
                  
              } else {?>
                                <!--haalt de pdf uit de map met de naam van de database-->
                                <a class="button2" target="_blank" href="pdf/<?php echo $pdf;?>">
                                    <p5>bekijk de pdf</p5>
                                </a>
                                <br>
                                <br> </section>
                    <hr>
                    <!-- .wrapper -->
                </article>
                <?php } ?>
                    <?php 
}  
?>
                        <article>
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