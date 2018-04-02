<?php
include("dbconnect.php");
session_start();

$sql = "SELECT id, name, category, description FROM artikel";
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

     <main class="adminwrapper">
               
                
                <div class = "center" >
                        <h1>EDIT POST</h1>
                   <a class="button2" onclick="myFunction()">Reload page</a>
                      <script>
                                function myFunction() {
                                    location.reload();
                                }
                            </script>
                   <br><br>
                   </div>
            <table class = "center" >
                <thead>
                    <tr>
                        <th scope="col">Titel</th>
                        <th scope="col" colspan="1">Id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col"></th>
                        <th scope="col">
                           
                      
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
      while($row = $result->fetch_assoc())
      {
          
      ?>
                        <tr>
                            <td> <strong class="book-title"><?php echo $row['name'];?></strong> </td>
                            <td class="item-stock">
                                <?php echo $row['id'];?>
                            </td>
                            <td class="item-qty">
                                <?php echo $row['category'];?>
                            </td>
                           
                            <td ><a class="button2" href="editpost.php?delete=<?php echo $row['id'];?>">Delete</a></td>
                            <td ><a class="button2"  href="editpostdata.php?edit_id=<?php echo $row['id'];?>">Edit</a></td>
                        </tr>
                        <?php
     if(isset($_GET['delete']))
     {
         $delete_id = $_GET['delete'];
         $sql = "DELETE FROM artikel WHERE id='$delete_id'";
         
         mysqli_query($conn,$sql);
    }     
          
          
?>
                            <?php
      }
    ?>
                </tbody>
            </table>
             
            <br><br>
       
           
        </main>
        
    </body>

    </html>