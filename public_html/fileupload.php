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
    </head>

    <body>
            <?php include("menu2.php") ?>
        <main role="main" class="wrapper">
            <?php 

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
     $sql = "INSERT INTO artikel (name, description, image, pdf, content, category)
     VALUES('$title', '$description', '$imagedata', '$filename', '$content', '$categorie')";
     //als het artikel succesvol is aangemaakt
     $succes = "Je artikel is succesvol gepplaatst op $categorie";
   if (mysqli_query($conn, $sql))
   {
       echo $succes;
   }
    
    else {
        echo 'fout';
    }
     //Upload the PDF
    if(move_uploaded_file($_FILES['pdfupload']['tmp_name'], $pdfDirectory.$filename)) {
     
    //Set path to the PDF file
    $pdfWithPath = $pdfDirectory.$filename;
     

    
}}?>
                <section class="panel">
                    <h2>Upload</h2>
                    <ul>
                        <form action="fileupload.php" method="post" enctype="multipart/form-data"> Name:
                            <br>
                            <input class="namebox" type="text" name="name">
                            <br> Description:
                            <input class="descriptionbox" type="text" name="description">
                            <br> Content:
                            <br>
                            <input name="content" class="contentbox">
                            <br> Category:
                            <select name="category">
                                <option value="">...</option>
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
                            <input type="submit" name="submit" value="Submit"> </form>
                    </ul>
                </section>
               
        </main>

    </body>

    </html>