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
        <title>DED</title>
    </head>

<?php include("menu.php") ?>
       <!--begin header-->
        <div id="slide07" class="slide fs">
            <div class="bcg"></div>
            <header class="wrapper">
                <h1 class="title">DED</h1>
                <p> <b>Design and Development. </b></p>
            </header>
        </div>
        <article>
                <div class="wrappervak">
                    <h1>Rubrics</h1>
                    <h4>
        CONCEPT EN ITERATIE
            </h4> <img src="">
                    <section>
                        <p> In sprint 1 had ik een heel concept gemaakt van wat ik wilde en hoe dit eruit zou komen te zien. Later heb ik dit allemaal veranderd omdat na feedback het niet de slimste maniet van vakken aantonen was. Ik heb het concept bijgewerkt en opnieuw begonnen. Zo heb ik nu dit portfolio gemaakt.</p>
                      
                    </section>
                    <section class="center">
                    
                        <a class="button2" href="pdf/dedherkansing.pdf" target="_blank">
                            <p5>ded documentatie pdf</p5>
                        </a>
                        <br>
                        <br> </section>
                </div>
            </article>
            <hr class="line2">
            <article>
                <div class="wrappervak">
                    <h4>
CODE
            </h4> <img src="">
                    <section>
                        <p>Zoals je kan zien aan mijn cms heb ik veel aandacht gegeven aan de php code. In mijn documentatie staat deze code uitgelegd. Ik heb in mij website alle codes verwerkt en deze vormen samen mijn eindproduct.  </p>
                        
                    </section>
                    <section class="center">
                        <a class="button2" href="pdf/dedherkansing.pdf" target="_blank">
                            <p5>ded documentatie pdf</p5>
                        </a>
                        <br>
                        <br> </section>
                </div>
            </article>
            <hr class="line2">
            <article>
                <div class="wrappervak">
                    <h4>
CODE VERANTWOORDING &amp; GEMAAKTE CONCEPTKEUZE
            </h4> <img src="">
                    <section>
                        <p>Voor mijn portfolio heb ik meerdere ontwerpkeuzes gemaakt die eerst niet goed bleken (slides en navigatie) deze heb ik veranderd en ik kan goed uitleggen waarom. Ook heeft elk afbeelding op mijn portfolio (behalve de vakken) iets met mij te maken. Bekijk mijn documentatie voor meer. </p>
                        
                    </section>
                    <section class="center">
                      <a class="button2" href="pdf/dedherkansing.pdf" target="_blank">
                            <p5>ded documentatie pdf</p5>
                        </a>
                        <br>
                        <br> </section>
                </div>
            </article>
            <hr class="line2">
            <br> 
            <h2 class="center">Overige Opdrachten</h2>
            <?php 
//selecteer alles van artikel met category ded  en met een while loop laat ie het op de website zien
$sql = ("SELECT * FROM artikel WHERE category = 'DED' ORDER BY id DESC") ;
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
        VALUES('{$name}', '{$comment}', 'DED')");
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
//comment halen uit database met categorie DED
$sql = ("SELECT * FROM comments WHERE category = 'DED' ORDER BY id ") ;
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
                                                <form class="wrapper" action="ded.php" method="POST">
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
    


    </html>