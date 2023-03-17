<?php

include 'connection.php';
 $sid = $_GET['id'];
 $sql= "SELECT * FROM stuudent WHERE id = '$sid' ";
$result =  mysqli_query($conn, $sql) or die("unsuccess");

$data = $result->fetch_assoc();
 if(isset($_POST['btnupdate'])){
    //$id = $_GET["id"];
    $stuname = $_POST["stuname"];
    $mobno = $_POST["mobileno"];
    $address = $_POST["adress"];
    $bloodgrp = $_POST["bloodgroup"];
    $sql = "UPDATE stuudent SET stuname = '{$stuname}', mobileno = '{$mobno}', adress = '{$address}', bloodgroup = '{$bloodgrp}' WHERE id = '{$sid}'";
    $result1 = mysqli_query($conn, $sql);
    
    if($result1) {
        echo "record updated successfully..!!";
    }
}
?>





<html>
    <head>
        <title>CRUD</title>
        <link rel="stylesheet" href="css.css">

    </head>
    <body>
    
    <div class="container"> 
        <div class="title">
        UPDATE STUDENT DATA
        </div>
        <form action="" method="POST">
        <div class="form">
            <div class="input_field">
                <label for="">STUDENT NAME:</label>
                <input type="text" name="stuname" class="input" value="<?php echo $data['stuname']; ?>">
            </div>
            <div class="input_field">
                <label for="">MOBILE_NO:</label>
                <input type="text" name="mobileno" class="input" value="<?php echo $data['mobileno']; ?>">
            </div>
            <div class="input_field">
                <label for=""> ADDRESS:</label>
                <input type="text" name="adress" class="input" value="<?php echo $data['adress']; ?>">
            </div>
            <div class="input_field">
                <label for="">BLOOD GROUP:</label>
                <input type="text" name="bloodgroup" class="input" value="<?php echo $data['bloodgroup']; ?>">
            </div>
            <div class="input_field">
                <input type="submit"  name="btnupdate" value="UPDATE" class="btn">
                <button class="normal"><a href="view.php">VIEW</a></button>
    
            </div>
    
        </div>
        </form>
    </div>
    </body>
</html>