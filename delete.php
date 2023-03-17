<?php
// $_GET['id'];
// $d = $_GET['id'];
// echo $d; 
include 'connection.php';
error_reporting(0);
// if(isset($_REQUEST['btndelete']))

	$id = $_GET["id"];
		$delete = "DELETE FROM stuudent WHERE id = '$id'";
        $result= mysqli_query($conn, $delete);
		//$conn->query($delete);

        if($result) {
            echo "Record deleted..!!";
        }
		

		
			


?>

<!-- <html>
    <head>
        <title>CRUD</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <h1><font color="red">DELETE STUDENT DATA </font></h1>
    <form action="/loginsystem/delete.php" method="POST">
            <table>
            <tr>
                    <td>Id:</td>
                    <td><input type="text" name="sid" placeholder="" value=""></td>
                </tr>

                <tr>
                    <td><input type="submit" name="btndelete" value="DELETE"></td>
                    <td><button><a href="view.php">VIEW</a></button></td>

                </tr>
            </table>
        </form>

    </body>
</html> -->