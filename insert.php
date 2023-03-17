<?php
//if($_SERVER["REQUEST_METHOD"] == "POST")
// if(isset($_REQUEST['btninsert']))
// {
//     include 'connection.php';

 
//     $stuname = $_POST["sname"];
//     $mobno = $_POST["mono"];
//     $address = $_POST["add"];
//     $bloodgrp = $_POST["bgrp"];

        // $sql = "INSERT INTO stuudent (stuname, mobileno, adress, bloodgroup) VALUES ('$stuname', '$mobno', '$address', '$bloodgrp')";
        

        // if($result){
        //     echo "record inserted!!";

        // }
    $ph=$phc='';
        if(isset($_POST['btninsert'])){
            include 'connection.php';

 
    $stuname = $_POST["sname"];
    $mobno = $_POST["mono"];
    $address = $_POST["add"];
    $bloodgrp = $_POST["bgrp"];
            $ph=trim($_POST['mono']);
            $phc='/^[0-9]{10,10}$/';

            // $b=trim($_POST['bgrp']);
            // $bg='/(A|B|AB|O)[+-]/';

            if(preg_match($phc,$ph)){
                $sql = "INSERT INTO stuudent (stuname, mobileno, adress, bloodgroup) VALUES ('$stuname', '$mobno', '$address', '$bloodgrp')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo "record inserted!!";
                }
            }else{
                echo "invalid";
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
       Enter student data
    </div>
    <form action="" method="POST">
    <div class="form">
        <div class="input_field">
            <label for="">STUDENT NAME</label>
            <input type="text" name="sname" class="input">
        </div>
        <div class="input_field">
            <label for="">MOBILE NUM</label>
            <input type="text" name="mono" class="input">
        </div>
        <div class="input_field">
            <label for="">ADDRESS</label>
            <input type="text" name="add" class="input">
        </div>
        <div class="input_field">
            <label for="">BLOOD GROUP</label>
            <input type="text" name="bgrp" class="input">
        </div>

        <div class="input_field">
            <input type="submit" name="btninsert" value="INSERT" class="btn" >
            <button class="normal"><a href="view.php">VIEW</a></button>
        </div>

    </div>
    </form>
</div>
</body>
</html>
<!-- 

<h1><font color="red">ENTER STUDENT DATA </font></h1>
        <section id="form">
    <form action="/loginsystem/insert.php" method="POST">
            <table>
                <tr>
                    <td>STUDENT NAME:</td>
                    <td><input type="text" name="sname" placeholder="Enter student name" value=""></td>
                </tr>
                <tr>
                    <td>MOBILE NO:</td>
                    <td><input type="text" name="mono" placeholder="Enter mobile number" value=""></td>
                </tr>
                <tr>
                    <td> ADDRESS:</td>
                    <td><input type="text" name="add" placeholder="Enter your address" value=""></td>
                </tr>
                <tr>
                    <td>BLOOD GROUP:</td>
                    <td><input type="text" name="bgrp" placeholder="Enter your Blood group" value=""></td>
                </tr>
                <tr>
                    <td><button class="normal" name="btninsert">INSERT</button></td>
                    <td><button class="normal"><a href="view.php">VIEW</a></button></td>
                    
                </tr>
            </table> -->