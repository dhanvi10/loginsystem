<?php
include 'connection.php';

if(isset($_POST['btnlogin'])){
    $fname = $_POST['fname'];
    $pass = $_POST['pass'];
  
 
 $sql=$user->login($fname,$pass);
 if($sql){
    echo "<script>alert('You have successfully Logged in!!');</script>";
    echo "<script>window.location.href='index_view.php'</script>";
 }else{
    echo "<script>alert('INVALID CREDENTIAL!!.. If not registered first register your self with click on register here!');</script>";
    echo "<script>window.location.href='login.php'</script>";
 }
}
?>

<html>
    <head>
        <title>LOGIN</title>
       <link rel="stylesheet" href="css.css"> 
       <script src="jquery.js"></script>
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
                <input type="text" name="fname" class="input" value="">
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
