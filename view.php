<a href="insert.php" class="in"> click here for record insert</a><br><br>
<?php include 'connection.php';

// if(isset($_GET['submit'])){
        // $limit = 2;
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                echo "<font size = '12'>limit is: " . $limit; echo "</font> <br><br>";
 
            }
            // echo $_GET['limit']; exit;
            if(isset($_GET['page'])){
                $page = $_GET['page'];   
            }else{
                $page = 1;
            }
            $offset =   ($page - 1) * $limit;
            $query="SELECT * FROM stuudent LIMIT {$offset},{$limit}";
            $result=mysqli_query($conn, $query);
        // }
            ?>
<html>
    <head>
        <title>VIEW</title>
         <link rel="stylesheet" href="css.css">
         <script src="https://kit.fontawesome.com/5bcb063eb5.js" crossorigin="anonymous"></script> <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        </head>
    <body>
        <form action="" method="GET">
        <div class ="limit">
            <div class="limit1">
                <label for="" class="limit3">limit</label>
                    <select name="limit" id="limit" class="limit4">
                    <option value="" >select limit</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                    </select>&nbsp;&nbsp;&nbsp;
                   <!-- <a href="view.php?limit='.$limit.'" >set limit</a> -->

                    <button type="submit" class="btnlimit">set limit</button>
            </div>
        </div>
        </form>
        <form action="search.php" method="GET">
        <label class="bl">Blood Group:</label>
                <select name="bg" id="bgrp" value="">
                    <option value="o" selected>o</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="ab">ab</option>
                </select>
            <div class="cl">
            <input type="text" name="search" placeholder="search" class="search">
            </div>
            <div class="dha">
            <button type="submit"><i class="fa-solid fa-magnifying-glass" id = "search"></i></button>
            </div>
            </form>
       <center> <table class="table" border=1px Cellpadding="20" cellspacing="25">
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
                        while($row=mysqli_fetch_array($result))
                        {
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
                                <td><a href="edit.php?id=<?php echo $row['id'] ?>">EDIT</a></td>
                                <td><a href="delete.php?id=<?php echo $row['id'] ?>">DELETE</a></td>
                            </tr>
            <?php
                        }        
            ?>
        </table>
        <?php
            $sql1 = "SELECT * FROM stuudent";
            $result1=mysqli_query($conn, $sql1) or die("query failed");
            if(mysqli_num_rows($result1) > 0){
                $total_record = mysqli_num_rows($result1);
                $total_page = ceil($total_record /  $limit);
                echo ' <ul id="pagination" class="section-p1">';
                for($i = 1; $i<= $total_page; $i++){
                    if($i == $page){
                        $active = "active";
                    }else{
                        $active = "";
                    }
                     echo '<a class = "'.$active.'" href="view.php?page='.$i.'" >'.$i.'</a>';
                }
                echo '</ul>';
            }
        ?> 
    </body>
</html>