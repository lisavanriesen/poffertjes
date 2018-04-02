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
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <title>EDIT</title>
        <script>
        </script>
    </head>

    <body>
            <?php include("menu2.php") ?>
        <main role="main">
            <?php
    
if(isset($_GET['edit_id']))
{
	$sql="SELECT * FROM artikel WHERE id=".$_GET['edit_id'];
    $records=mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_array($records)){
            $title1 = $row['title'];
            $description = $row['description'];
            $content = $row['content'];
            $image = $row['image'];
            $id = $row['id'];
            
    }
}
if (isset($_POST["submit"]))
{
    
    $title = strip_tags(trim($_POST["name"]));
    $description = strip_tags(trim($_POST["description"]));
    $content = strip_tags(trim($_POST["content"]));
    $categorie = strip_tags(trim($_POST["category"]));
    
    $imagename = $_FILES["image"]["name"];
    $imagedata = addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
    $imagetype = $_FILES["image"]["type"];
  
     //Define the directory to store the uploaded PDF
    $pdfDirectory = "pdf/";

    //Get the name of the file (Basename)
    $filename = basename( $_FILES['pdfupload']['name'], ".pdf");
    
    //Remove all characters from the file name other than letters, numbers, hyphens and underscores
    $filename = preg_replace("/[^A-Za-z0-9_-]/", "", $filename).".pdf";

    //data toevoegen aan database 
    $sql = $conn->query("UPDATE artikel SET name='$title', description='$description', image='$imagedata', imagename='$imagename', pdf='$filename', content='$content', category='$categorie' WHERE id='$id'");
     //als het artikel succesvol is aangemaakt
     $succes = "Je artikel is succesvol gepplaatst op $categorie";
     //Upload the PDF
    if(move_uploaded_file($_FILES['pdfupload']['tmp_name'], $pdfDirectory.$filename)) {
     
    //Set path to the PDF file
    $pdfWithPath = $pdfDirectory.$filename;
     
    // Finally display the image
    echo "<p><a href=\"$pdfWithPath\"><img src=\"pdfimage/$thumb\" alt=\"\" /></a></p>";
    }
    
}?>
                <section>
                    <h2>Edit Form</h2>
                    <ul>
                        <form method="post" enctype="multipart/form-data"> Name:
                            <br>
                            <input class="namebox" type="text" name="name" value="<?php echo $title1; ?>">
                            <br> Description:
                            <input class="descriptionbox" type="text" name="description" value="<?php echo $description; ?>">
                            <br> Content:
                            <br>
                            <input name="content"  cols="40" rows="5" value="<?php echo $content; ?>" > 
                            
                            <br> Category:
                            <select name="category">
                                <option value=""><?php echo $category; ?></option>
                                <option value="SCO">SCO</option>
                                <option value="DED">DED</option>
                                <option value="UXU">UXU</option>
                                <option value="PT">PT</option>
                            </select>
                            <br> Select image to upload:
                            <input type="file" name="image" id="fileToUpload" multiple="multiple" accept="image/x-png,image/gif,image/jpeg">
                            <br> Pdf:
                            <input type="file" name="pdfupload" id="pdfupload" accept="application/pdf">
                            <br>
                            <input type="submit" name="submit" value="Update"> </form>
                    </ul>
                </section>
               
        </main>

    </body>

    </html>