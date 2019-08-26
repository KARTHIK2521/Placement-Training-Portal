<?php

$con=mysqli_connect("localhost","root","","project");


if($con)

{

   $file=$_FILES['csvfile']['tmp_name'];
    $handle=fopen($file,"r");
     $i=0;

   while ($cont=fgetcsv($handle,1000,",") !==false) {

   	      $table=rtrim($_FILES['csvfile']['name'],".csv");
          if($i==0)
          {
           $userid=$cont[0];
           $password=$cont[1];
           $email=$cont[2];
            $query="CREATE TABLE $table ($userid varchar(10),$password varchar(10), $email varchar(20)); ";
           echo $query,"<br>";
           mysqli_query($con, $query);
          }

          else
          {
           
           $query="INSERT INTO $table ($userid, $password, $email) VALUES('$cont[0]','$cont[1]', '$cont[2]'); " ;

           echo $query,"<br>";
           mysqli_query($con, $query);
          }
         $i++;
     }
	# code...



}



else
{

	echo "connection failed";
}







?>