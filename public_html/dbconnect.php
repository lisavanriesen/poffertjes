<?php
$servername = "studmysql01.fhict.local";
$db = "dbi360812";
$username = "dbi360812";
$password = "ditiseenwachtwoord";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection


if(mysqli_connect_errno())
{
    echo "Connection failed" . mysqli_connect_error();
}


?>