

<!-- <a href="register.php">REGISTER </a><br>
<a href="login.php">LOGIN </a><br>

<a href="insert.php">ENTER STUDENT RECORD </a><br>
<a href="edit.php">EDIT RECORDS </a><br>
<a href="view.php">VIEW RECORDS </a><br>
<a href="delete.php">DELETE RECORDS </a><br> -->
<?php
session_start();
include 'connection.php';
if (!isset($_SESSION["login_info"])) {
    header("location:login.php");
}
?>


    




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css"> 

</head>
<body>
    
<center><h1>Welcome to this site!! </h1></center>
<section id="header">
                <a href="#"><img src="images/logo1.jpg" class="logo" alt=""></a>

                <div>
                    <ul id="navbar">
                    <li><a class="active" href="welcome.php">HOME</a></li>
                       
                        <li><a href="insert.php">ENTER STUDENT DATA</a></li>
                        <li><a href="edit.php">EDIT DATA</a></li>
                        <li><a href="view.php">VIEW DATA</a></li>
                        <li><a class="active" href="register.php">REGISTER</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                      
                       
                    </ul>
                </div>
            </section>
            <div class="f-box">
                    <img src="1.jpeg" alt=""  width="100%" height="100%"> 
                    
            </div>
</body>
</html>