<?php

//$servername="localhost";
//$username="root";
//$password="";
//$dbname="project";


//$conn = mysqli_connect($servername, $username,$password,$dbname);

include("database.php");
//if(!$conn)
//{
    //die("connection is failed: ".mysqli_connect_error());
//}


if( isset($_POST['save'] ) )
        
        {

        
        $conn=mysqli_connect("localhost","root","","project");
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $msg="";

        $result=$conn->query("SELECT * FROM admin WHERE usernname='$user' AND password='$pass' ");
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())

            {
                //$_SESSION['id']=$row[]
                header("location: adminprofile.php");
            }

        }
    else
    {
        echo "<script> alert('username and password is wrong')</script>";
    }
        

}








?>