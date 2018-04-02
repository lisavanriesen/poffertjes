<?php

error_reporting(E_ALL);
include("dbconnect.php");
// session_start();


if(isset($_POST["uname"]) && !empty($_POST['uname']))
{

    $username = $_POST["uname"];
    $password = $_POST["psw"];
    echo $username;
exit;
    //$password = mysqli_real_escape_string($db, $password);
    $password = password_hash($password, PASSWORD_DEFAULT);
//    $name = mysqli_real_escape_string($db, $name);
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) >= 1)
    {
        echo "name already exists";
    }
    else
    {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        
        if ( $conn->query($sql) == TRUE)
        {
            header('Location: logform.php');
        }
        else
        {
            echo 'fout';
        }
    }
}

 
    
?>