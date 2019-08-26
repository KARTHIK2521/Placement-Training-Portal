<?php

$servername="localhost";
$username="root";
$password="";
$dbname="project";


$conn = mysqli_connect($servername, $username,$password,$dbname);

if(!$conn)
{
	die("connection is failed: ".mysqli_connect_error());
}


if( isset($_POST['usrnm']) and isset($_POST['psw']) ) {
		//include('config.php'); //code is given below (used for database connection)
		$user=$_POST['usrnm'];
		$pass=$_POST['psw'];
 
		$ret=mysqli_query( $conn, "SELECT * FROM studentsinup WHERE uname='$user' AND pword='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
		if(!$row) {
			header("Location: profile.php");
		}
		else {
	        session_start();
	        $_SESSION['user']=$user;
			header('location: signup.php');
		}
}







mysqli_close($conn);


?>