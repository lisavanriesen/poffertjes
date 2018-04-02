<?php

    //connectie toevoegen
    include ("dbconnect.php");

//als er op de login button wordt geklikt
if (isset($_POST['login']))
{

        $EM = mysqli_real_escape_string($conn, $_POST['uname']);
        $PW = $_POST['psw'];

        //kijken of username en password allebei zijn ingevuld.
        if(empty($EM) || empty($PW))
        {

                echo "Niet beide velden zijn ingevuld";
        }
        else
        {

        //kijken of gebruiker bestaan in de db
        $query = $conn->query("SELECT *
                              FROM users
                              WHERE username='$EM'");

        //gegevens uit de db halen
        $row = $query->fetch_array(MYSQLI_ASSOC);

        if(password_verify($PW, $row['password']))
        {

        session_start();
        $_SESSION["username"] = $row["username"];

        //doorsturen naar pagina
        header('Location: index.php');

        }
            else
            {
            echo $message = "Username of password is niet correct.";
            }
        }
}
?>
