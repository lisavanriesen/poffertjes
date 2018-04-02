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
        <title>Dashboard</title>
        <script>
        </script>
    </head>

    <body>
    <?php include("menu2.php") ?>


                 <main class="adminwrapper" >
                       <div class= "center">
                        <h1 >USERS</h1>
                   <a class="button2" onclick="myFunction()">Reload page</a>

                     </div>
<script>
function myFunction() {
    location.reload();
}
</script>
                          
<br><br>
     <table class= "center">
  <thead>
    <tr>
     <th scope="col">Username</th>
      <th scope="col" colspan="1">Id</th>
      <th scope="col">level</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php
      while($row = $result->fetch_assoc())
      {
          
      ?>
    <tr>
          <td>
        <strong class=""><?php echo $row['username'];?></strong>
          </td>
         <td class=""><?php echo $row['id'];?></td>
          <td class=""><?php echo $row['user_level'];?></td>
        <td ><a class="button2"href="users.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
        <td ><a class="button2" href="edituser.php?edit_id=<?php echo $row['id'];?>">Edit</a></td>
    </tr>
<?php
     if(isset($_GET['delete']))
     {
         $delete_id = $_GET['delete'];
         $sql = "DELETE FROM users WHERE id='$delete_id'";
         
         mysqli_query($conn,$sql);
    }     
          
          
?>
      
    <?php
      }
    ?>
   </tbody>
</table>
                   
         
 </main>


</body>
</html>
