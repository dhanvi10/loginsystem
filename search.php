<a href="insert.php" class="in"> click here for record insert</a><br><br>
<?php include 'connection.php';
?>
<?php

    if (isset($_GET['search']))
    {
        $search = $_GET['search'];
        echo "<font size = '12'>Search for :  " . $search; echo "<br></font>";
        if(isset($_GET['bg']))
            {
            $bloodgroup = $_GET['bg'];
            echo "<font size = '12'>bloodgroup: " . $bloodgroup; echo "</font> <br><br>";
            $query = "SELECT * FROM stuudent WHERE( stuudent.stuname LIKE '%{$search}%' OR stuudent.mobileno LIKE '%{$search}%' OR stuudent.adress LIKE '%{$search}%') AND stuudent.bloodgroup LIKE '%{$bloodgroup}%'";
            $result = mysqli_query($conn, $query) or die("query failed");
            // echo $result; 
        } 
    }
    
    // if(($_GET['search']) != ($_GET['bg'])){
    //     echo "<td><b> RECORD NOT FOUND!!</b> </td>";
    // }
?>
<html>
    <head>
        <title> 
            VIEW
        </title>
        <link rel="stylesheet" href="css.css">
        <script src="https://kit.fontawesome.com/5bcb063eb5.js" crossorigin="anonymous"></script>         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <form action="search.php" method="GET">
            <div class="block">
                <label class="bl">
                    Blood Group:
                </label>
                    <select name="bg" id="bgrp" value="">
                    <option value="">select blood group</option>
                        <option value="o" >o</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="ab">ab</option>
                    </select>
            </div>

            <div class="cl">
                <input type="text" name="search" placeholder="search" class="search">
            </div>
            <div class="dha">
                <button type = "submit" >
                <i class="fa-solid fa-magnifying-glass" id = "search"></i></button>
            </div>
        </form>

       <center> 
        <table class="table" border=1px Cellpadding="20" cellspacing="25">
            <tr class="ro">
                <!-- <th>ID</th> -->
                <th>STUDENT NAME</th>
                <th>MOBILE NUMBER</th>
                <th>ADDRESS</th>
                <th>BLOOD GROUP</th>
                <th>OPERATION</th>
                <th>OPERATION</th>
            </tr>
            <?php
                               if(($_GET['search']) != ($_GET['bg'])){
                                echo "<td><b> RECORD NOT FOUND!!</b> </td>";
                            }
                    ?>
<?php
                    while ($row = mysqli_fetch_array($result)) {
                // $id = $row['id'];
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
                    <?php
                               if(!$result){
                                echo "<td><b> RECORD NOT FOUND!!</b> </td>";
                            }
                    ?>
                    
                    <td><a href="edit.php?id=<?php echo $row['id'] ?>">EDIT</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id'] ?>">DELETE</a></td>
                </tr>

               
<?php
        }
?>
        </table>
        </body>
</html>