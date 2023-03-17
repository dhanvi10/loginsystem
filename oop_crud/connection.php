<?php
// include 'insert.php';

session_start();
        class user{
            private $conn;
            // public $dbh;
            public function __construct(){
                $this->conn = mysqli_connect('localhost','root','','loginsys');
                if(! $this->conn){
                //     echo "success";
                // }else{
                    echo "not";
                }
            }
            public function register($fname,$lname,$mono,$addr,$pass,$cpass){
                $ret = mysqli_query($this->conn,"INSERT INTO register(fname,lname,mono,addr,pass,cpass) VALUES ('$fname','$lname','$mono','$addr','$pass','$cpass')");
                return $ret;
            }

            public function login($fname,$pass){
                $ret = mysqli_query($this->conn,"SELECT fname, pass FROM register WHERE fname='{$fname}' AND pass='{$pass}'");
                // $user_data = mysqli_fetch_array($ret);  
                //print_r($no_rows);  
                $no_rows = mysqli_num_rows($ret);  
                if ($no_rows == 1)   
                {  
                    $_SESSION['login'] = true;   
                    return TRUE;  
                }   
                return $ret;
            }


            public function insert($name,$mobileno,$address,$bloodgroup){
            $ret=mysqli_query($this->conn,"insert into stuudent(stuname,mobileno,adress,bloodgroup) values('$name','$mobileno','$address','$bloodgroup')");
            return $ret;
            }

            public function fetchdata(){
            $result=mysqli_query($this->conn,"select * from stuudent");
            return $result;
            }

            public function update($sid,$name,$mobileno,$address,$bloodgroup){
	        $updaterecord=mysqli_query($this->conn,"update  stuudent set stuname='$name',mobileno='$mobileno',adress='$address',bloodgroup='$bloodgroup' where id='$sid' ");
	        return $updaterecord;
	        }
            
            public function fetchonerecord($sid){
	        $oneresult=mysqli_query($this->conn,"select * from stuudent where id=$sid");
	        return $oneresult;
	        }

            public function delete($sid){
	        $delete=mysqli_query($this->conn,"delete from stuudent where id=$sid");
	        return $delete;
	}
        }
        $user = new user();


?>

