<?php
include 'connection.php';
$updatedata=new user();

if(isset($_POST['btnupdate']))
{
    $sid=intval($_GET['id']);
       $stuname = $_POST["stuname"];
       $mobileno = $_POST["mobileno"];
       $address = $_POST["adress"];
       $bloodgroup = $_POST["bloodgroup"];
$sql=$updatedata->update($sid,$stuname,$mobileno,$address,$bloodgroup);
if($sql){
echo "<script>alert('Record Updated successfully');</script>";
echo "<script>window.location.href='index_view.php'</script>";
}
}
?>


<html>
    <head>
        <title>Update</title>
        <script src="jquery.js"></script>
        <link rel="stylesheet" href="css.css">

    </head>
    <body>
    
    <div class="container"> 
        <div class="title">
        UPDATE STUDENT DATA
        </div>
<?php
$sid=intval($_GET['id']);
$onerecord=new user();
$sql=$onerecord->fetchonerecord($sid);
// $cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
        <form action="" method="POST">
        <div class="form">
            <div class="input_field">
                <label for="">STUDENT NAME:</label>
                <input type="text" name="stuname" class="input" value="<?php echo $row['stuname']; ?>">
            </div>
            <div class="input_field">
                <label for="">MOBILE_NO:</label>
                <input type="text" name="mobileno" class="input" value="<?php echo $row['mobileno']; ?>">
            </div>
            <div class="input_field">
                <label for=""> ADDRESS:</label>
                <input type="text" name="adress" class="input" value="<?php echo $row['adress']; ?>">
            </div>
            <div class="input_field">
                <label for="">BLOOD GROUP:</label>
                <input type="text" name="bloodgroup" class="input" value="<?php echo $row['bloodgroup']; ?>">
            </div>
<?php } ?>

            <div class="input_field">
                <input type="submit"  name="btnupdate" value="UPDATE" class="btn">
                <button class="normal"><a href="index_view.php">VIEW</a></button>
    
            </div>
    
        </div>
        </form>
    </div>
    </body>
</html>