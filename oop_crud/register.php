<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fnme'];
    $lname = $_POST['lnme'];
    $mono = $_POST['mono'];
    $addr = $_POST['addr'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $sql=$user->register($fname,$lname,$mono,$addr,$pass,$cpass);
    if($sql){
    echo "<script>alert('You have registered successfully');</script>";
    echo "<script>window.location.href='login.php'</script>";
    }else{
    echo "<script>alert('You haven't registered inserted!!');</script>";
    }

}
?>


<html>
    <head>
        <title>registration</title>
        <link rel="stylesheet" href="css.css">
        <script src="jquery.js"></script>
    </head>
    <body>
    
    <div class="container"> 
        <div class="title">
            Registration form
        </div>
        <form action="" method="POST">
        <div class="form">
            <div class="input_field">
                <label for="">First name</label>
                <input type="text" name="fnme" class="input">
            </div>
            <div class="input_field">
                <label for="">Last name</label>
                <input type="text" name="lnme" class="input">
            </div>
            <div class="input_field">
                <label for="">Mobile No</label>
                <input type="text" name="mono" class="input">
            </div>
            <div class="input_field">
                <label for="">Address</label>
                <input type="text" name="addr" class="input">
            </div>
            <div class="input_field">
                <label for="">password</label>
                <input type="password" name="pass" class="input">
            </div>
            <div class="input_field">
                <label for="">Confirm password</label>
                <input type="password" name="cpass" class="input">
            </div>
            <!-- <div class="input_field_terms">
                <label for="" class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to term and condition</p>
            </div> -->
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="submit">
            </div>
    
        </div>
        </form>
    </div>
    </body>
</html>