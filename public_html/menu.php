<?php
include ("dbconnect.php");
session_start();

$current_username = $_SESSION['username'];

$sql = "SELECT user_level FROM users WHERE username='$current_username'";
$result = $conn->query($sql);
?>

   

   <nav>
    <ul class="topnav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">Wie is Lisa?</a></li>
        <li><a href="contact.php">Contact</a></li>
        <!--eerste dropdown button voor de vakken-->
        <li>
            <div class="dropdown1">
                <button class="dropbtn1"> Vakken </button>
                <div class="dropdown-content"> <a href="ded.php">DED</a> <a href="sco.php">SCO</a> <a href="ux.php">UXU</a> <a href="pt.php">PT</a> </div>
            </div>
        </li>
        <!--als de gebruiker is ingelogd dan laat hij de naam en het dropdown menu zien anders niet-->
        <?php
 if(isset($_SESSION['username']))
  {
  ?>
            <div class="dropdown">
                <button class="dropbtn">Hi,
                    <?php echo $_SESSION["username"]; ?>
                        <div class="arrow-down"></div>
                </button>
                <div class="dropdown-content"> <a href=" <?php if ($result->num_rows==1)
{
    $row = $result->fetch_assoc();
    // If Admin
    if($row['user_level'] == 1)
    {
        echo "admindashboard.php";
       
    }
    // If Member
    else if ($row['user_level']==2 || $row['user_level']==0)
    {
        echo "";
    }
}
 
  ?>
           ">Admin panel</a><a href="logout.php">Log uit</a> <a href="deleteown.php" onclick="return confirm('Weet je het zeker?');">Deactiveer Account</a> </div>
            </div>
            <?php
} else
{

  ?>
                <li class="right"><a href="regform.php">Registratie</a></li>
                <li class="right"><a href="logform.php">Login</a></li>
                <?php }
   ?>
    </ul>
</nav>