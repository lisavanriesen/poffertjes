<?php
include ("dbconnect.php");
session_start();

$current_username = $_SESSION['username'];

$sql = "SELECT user_level FROM users WHERE username='$current_username'";
$result = $conn->query($sql);
if ($result->num_rows==1)
{
    $row = $result->fetch_assoc();
    // If Admin
    if($row['user_level'] == 1)
    {
        header('Location: admindashboard.php');
        die();
    }
    // If Member
    else if ($row['user_level']==2 || $row['user_level']==0)
    {
        header('Location: index.php');
    }
}
 
  ?>
