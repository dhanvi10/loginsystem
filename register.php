<?php

//if($_SERVER["REQUEST_METHOD"] == "POST")
if(isset($_POST['submit']))
{
    include 'connection.php';
      
    $finame = $_POST["fnme"];
    $laname = $_POST["lnme"];
    $mono = $_POST["mono"];
    $addr = $_POST["addr"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    if($pass == $cpass){
    $sql = "INSERT INTO register (fname, lname, mono, addr, pass, cpass) VALUES ('$finame ','$laname','$mono','$addr','$pass','$cpass')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "record inserted!!";
    }
}else 
{
   echo "password not match"; 
}
}
?>

<html>
    <head>
        <title>registration</title>
        <link rel="stylesheet" href="css.css">

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