<?php
include("dbconnect.php");
session_start();

$sql = "SELECT id, username, user_level FROM users";
$result = $conn->query($sql);

?>
    <?php
if(isset($_GET['edit_id']))
{
	$sql="SELECT * FROM users WHERE id=".$_GET['edit_id'];
    $records=mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_array($records)){
            $username = $row['username'];
            $user_level = $row['user_level'];
            $id = $row['id'];
    }
}
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
   if(isset($_POST['submit']))
{
	//data uit de input velden halen
    $username = trim($_POST['usersname']);
    $username = strip_tags($_POST['username']);
    $username = htmlspecialchars($_POST['username']);
       
    $user_level = strip_tags(trim($_POST["user_level"]));
    
    //data update in de database
    $sql = ("UPDATE users SET username=' $username  ',user_level=' $user_level  ' WHERE id='  $id '");
    if(mysqli_query($conn, $sql)){
    //gebruiker terugsturen
    header("Location: users.php");
    } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
?>
                    
                        <h2>Edit User</h2>
                        <ul>
                            <form method="post"> Username:
                                <input class="namebox" type="text" name="username">
                                <br> User-Level:
                                <input class="descriptionbox" type="user_level" name="user_level">
                                <br>
                                <input  type="submit" name="submit" value="Submit"> </form>
                        </ul>
                
            </main>
        </body>

        </html>