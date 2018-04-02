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
                <h1 class="title">DEV</h1>
                <p> <b>Development. </b></p>
            </header>
        </div>
        <article>
                <div class="wrappervak">
                    <h1>Rubrics</h1>
                    <h4>
        Kennis frameworks
            </h4> <img src="">
                    <section>
                        <p>
goed - Student heeft een onderbouwd 
beeld van de voor- en nadelen van 
frameworks en kan dit toepassen op 
projecten <br>
voldoende - Student kan aangeven wat standaard 
code is en kan voor en nadelen van 
framewerorks benoemen<br>
onvoldoende - 
Student kan uitleggen wat standaard code 
is en wat code uit een framework is </p>
                      
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
KEUZE FRAMEWORK
            </h4> <img src="">
                    <section>
                        <p> goed- Student heeft de keuze van het  framework onderbouwd. Het gekozen framework leidt tot een vernieuwend product<br>
                         voldoende- Student heeft een onderbouwde keuze voor een framework gemaakt dat past bij de probleemstelling <br>
                         onvoldoende- Student heeft een framework gevonden, maar dit sluit niet aan bij het op te lossen probleem </p>
                        
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
DOCUMENTATIE
            </h4> <img src="">
                    <section>
                        <p>goed- De student heeft documentatie geschreven die er op gericht is de code naar buiten toe over te dragen<br>
                         voldoende- Student heeft documentatie geschreven die er op gericht is de code voor anderen binnen het team te hergebruiken <br>
                         onvoldoende- Student heeft rommelige of nog geen documentatie geschreven,  waardoor de code lastig is te hergebruiken.   </p>
                        
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
                        <p>goed- De student heeft eigen code geschreven 
die vernieuwend is en ook voor anderen 
buiten het project interessant is.<br>
                         voldoende- Student heeft een combinatie gemaakt 
tussen bestaande frameworks en 
eigen frameworks <br>
                         onvoldoende- Student heeft gebruik gemaakt van 
bestaande frameworks   </p>
                        
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
TEST
            </h4> <img src="">
                    <section>
                        <p>goed- 
De student heeft de applicatie getest 
met de doelgroep en dit heeft geleid tot 
verbeteringen aan de applicatie.<br>
                         voldoende- Student heeft de applicatie laten testen 
door peers (medestudenten) <br>
                         onvoldoende- Student heeft een technische test uitgevoerd  </p>
                        
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