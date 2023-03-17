<?php
include 'connection.php';

if(isset($_GET['id']))
    {
$sid=$_GET['id'];
$delete=new user();
$sql=$delete->delete($sid);

if($sql){
    echo "<script>alert('Record delete successfully');</script>";
echo "<script>window.location.href='index_view.php'</script>";
}
    }
    


?>

