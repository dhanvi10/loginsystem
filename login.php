<?php
session_start();

include 'connection.php';

if (isset($_SESSION["login_info"])) {
    header("location:welcome.php");
}

if (isset($_POST['btnlogin'])) {
    $user = $_POST['fnamee'];
    $pass = $_POST['pass'];

    $sql = " SELECT fname, pass FROM  register WHERE fname='{$user}' AND pass='{$pass}' ";
    $result = mysqli_query($conn, $sql) or die("query failed");

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["login_info"] = "1";
            header('location:welcome.php');
        }
    } else {
        echo "login failed";
        header('location:login.php');
    }
}

?>

<html>
    <head>
        <title>LOGIN</title>
       <link rel="stylesheet" href="css.css"> 

    </head>
    <body>
  
  

    <div class="container"> 
        <div class="title">
        Login form
        </div>
        <form action="" method="POST">
        <div class="form">
            <div class="input_field">
                <label for="">USERNAME:</label>
                <input type="text" name="fnamee" class="input" value="">
            </div>
            <div class="input_field">
                <label for="">PASSWORD:</label>
                <input type="password" name="pass" class="input" value="">
            </div>
    
            <div class="input_field">
                <input type="submit" name="btnlogin" value="LOGIN" class="btn">
                <button class="normal"><a href="register.php">Register here!</a></button>
    
            </div>
    
        </div>
        </form>
    </div>
    </body>
</html>
