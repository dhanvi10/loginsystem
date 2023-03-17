<?php
include 'connection.php';

if(isset($_POST['btninsert'])){
   $name = $_POST['sname'];
   $mobileno = $_POST['mono'];
   $address = $_POST['add'];
   $bloodgroup = $_POST['bgrp'];

$sql=$user->insert($name,$mobileno,$address,$bloodgroup);
if($sql){
    echo "<script>alert('Record inserted successfully');</script>";
    
}else{
    echo "<script>alert('Record doesn't inserted!!');</script>";
}
}
?>

<html>
    <head>
        <title>insert</title>
      <link rel="stylesheet" href="css.css"> 
      <script src="jquery.js"></script>
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
            <button class="normal"><a href="index_view.php">VIEW</a></button>
        </div>

    </div>
    </form>
</div>
</body>
</html>