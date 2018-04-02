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
       <link rel="icon" href="favicons.ico">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <title>ADMIN</title>
    </head>

    <body>
            <?php include("menu2.php") ?>
        <div id="frame2">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col" colspan="1">Id</th>
                        <th scope="col">User level</th>
                        <th scope="col"></th>
                        <th scope="col">
                            <button class="refreshbtn" onclick="myFunction()">Reload page</button>
                            <script>
                                function myFunction() {
                                    location.reload();
                                }
                            </script>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
      while($row = $result->fetch_assoc())
      {
          
      ?>
                        <tr>
                            <td> <strong class="book-title"><?php echo $row['username'];?></strong> </td>
                            <td class="item-stock">
                                <?php echo $row['id'];?>
                            </td>
                            <td class="item-qty">
                                <?php echo $row['user_level'];?>
                            </td>
                            <td class="book-title"><a href="adminpanel.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
                            <td class="item-stock"><a href="edituser.php">Edit</a></td>
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
            <table class="table2">
                <thead>
                    <tr>
                        <th scope="col">User level</th>
                        <th scope="col" colspan="1">Beschrijving</th>
                    </tr>
                </thead>
                <tr>
                    <td> <strong class="book-title">0</strong> </td>
                    <td class="item-stock">Not assigned</td>
                </tr>
                <tr>
                    <td> <strong class="book-title">1</strong> </td>
                    <td class="item-stock">Admin</td>
                </tr>
                <tr>
                    <td> <strong class="book-title">2</strong> </td>
                    <td class="item-stock">Member</td>
                </tr>
            </table>
        </div>
    </body>

    </html>