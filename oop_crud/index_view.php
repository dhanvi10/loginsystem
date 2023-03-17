<?php
include 'connection.php';

if(($_SESSION)){  
    header("Location:login.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css"> 
    <title>index</title>
</head>
<body>
    <center><h3 class ="link"><a href="insert.php">Click here for insert record</a></h3>
    <h1 class= "top">view student record</h1>
</center>
<h3 class = "lout"><a href="logout.php">Logout</a></h3>
    
       <center> <table class="table" border=1px Cellpadding="20" cellspacing="25">
            <thead class="ro">
                <!-- <th>ID</th> -->
                <th>STUDENT NAME</th>
                <th>MOBILE NUMBER</th>
                <th>ADDRESS</th>
                <th>BLOOD GROUP</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </thead>

<?php
                    $fetchdata=new user();
                    $sql=$fetchdata->fetchdata();
                    //   $cnt=1;
                    while($row=mysqli_fetch_array($sql))
                    {
                            $name = $row['stuname'];
                            $mono = $row['mobileno'];
                            $addr = $row['adress'];
                            $bg = $row['bloodgroup'];
?>
                            <tr>
                                <td><?php echo $name ?></td>
                                <td><?php echo $mono ?></td>
                                <td><?php echo $addr ?></td>
                                <td><?php echo $bg ?></td>
                                <td><a href="update.php?id=<?php echo $row['id'] ?>">EDIT</a></td>
                                <td><a href="delete.php?id=<?php echo $row['id'] ?>">DELETE</a></td>
                            </tr>
            <?php
                        }     
                    // }   
            ?>
        </table>
</body>
</html>