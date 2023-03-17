<?php
$server = "localhost";
$user = "root";
$pass ="";
$db = "loginsys";

$conn = mysqli_connect($server, $user, $pass, $db);
if(!$conn){
    echo "df";
}
?>