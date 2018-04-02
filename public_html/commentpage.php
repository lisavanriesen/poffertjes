<?php
include("dbconnect.php");
session_start();

$sql = "SELECT id, name, comment, category FROM comments";
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
        
        
        <div  class="adminwrapper">
            <div class="center" class="adminwrapper">
                <h1>COMMENTS</h1> <a class="button2" onclick="myFunction()">Reload page</a>
                 <script>
                                function myFunction() {
                                    location.reload();
                                }
                            </script>
                <br>
                <br>
            </div>
            <table class="center">
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col" colspan="1">Id</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Category</th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
      while($row = $result->fetch_assoc())
      {
          
      ?>
                        <tr>
                            <td> <strong><?php echo $row['name'];?></strong> </td>
                            <td>
                                <?php echo $row['id'];?>
                            </td>
                            <td>
                                <?php echo $row['comment'];?>
                            </td>
                            <td c>
                                <?php echo $row['category'];?>
                            </td>
                            <td><a class="button2" href="commentpage.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
                        </tr>
                        <?php
     if(isset($_GET['delete']))
     {
         $delete_id = $_GET['delete'];
         $sql = "DELETE FROM comments WHERE id='$delete_id'";
         
         mysqli_query($conn,$sql);
    }     
          
          
?>
                            <?php
      }
    ?>
                </tbody>
            </table>
        </div>
    </body>

    </html>