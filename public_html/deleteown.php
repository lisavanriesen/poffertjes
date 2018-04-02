<?php
include ("dbconnect.php");
session_start();

$current_username = $_SESSION['username'];

if(isset($_SESSION['username']))
{
    $sql = "DELETE FROM users WHERE username='$current_username'";
    
    if ($conn->query($sql) === TRUE) 
    {
    header('Location: logform.php');
    die();
    } 
    else 
    {
    echo "Fout tijdens het updaten: " . $conn->error;
    }

$conn->close();
}

?>