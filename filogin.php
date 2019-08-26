<?php

$servername="localhost";
$username="root";
$password="";
$dbname="project";


$conn = mysqli_connect($servername, $username,$password,$dbname);

//if(!$conn)
//{
	//die("connection is failed: ".mysqli_connect_error());
//}


if( isset($_POST['save'] ) )
        
        {

		
		$conn=mysqli_connect("localhost","root","","project");
		$user=$_POST['usrnm'];
		$pass=$_POST['psw'];
		$msg="";

		$result=$conn->query("SELECT * FROM inbox WHERE uname='$user' AND pword='$pass' ");
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())

            {
            	//$_SESSION['id']=$row[]
            	header("location: profile.php");
            }

        }
    else
    {
    	echo "<script> alert('password is wrong')</script>";
    }
		

}








?>