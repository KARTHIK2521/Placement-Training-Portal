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



 $Student_ID=$_POST['regnumber'];    //here Student Id is primary key from database and it assign in sql query.then it gives unique record from the database demo  and table register 

$sql = "SELECT `rno`, `fname`, `lname`, `dept`, `dob`, `email`, `mob`, `tenth_per`, `twelve_per`, `ug_per`, `pg_per`, `back_his`, `cur_back`, `ug_one`, `ug_two`, `ug_three`, `ug_four`, `ug_five`, `ug_six`, `pg_one`, `pg_two`, `pg_three`, `pg_four`, `pg_five`, `pg_six`, `study_gap`, `day_hos`, `age`, `address` FROM `profile` WHERE rno='$Student_ID'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          
          $field1=$row["rno"];
          $field2= $row["fname"];
          $field3=$row["lname"];
          $field4= $row["dept"];
          $field5=$row["dob"];
          $field6=$row["email"];
          $field7= $row["mob"];
          $field8=$row["tenth_per"];
          $field9= $row["twelve_per"];
          $field10=$row["ug_per"];
          $field11=$row["pg_per"];
          $field12=$row["back_his"];
          $field13= $row["cur_back"];
          $field14=$row["ug_one"];
          $field15= $row["ug_two"];
          $field16=$row["ug_three"];
          $field17=$row["ug_four"];
          $field18= $row["ug_five"];
          $field19=$row["ug_six"];
          $field20= $row["pg_one"];
          $field21=$row["pg_two"];
          $field22=$row["pg_three"];
          $field23= $row["pg_four"];
          $field24=$row["pg_five"];
          $field25= $row["pg_six"];
          $field26=$row["study_gap"];
          $field27=$row["day_hos"];
          $field28= $row["age"];
          $field29=$row["address"];
         

?>
<!DOCTYPE html>
<html>
<head>
<style>
body{

	background-color: rgb(129, 207, 224);
    
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  
  text-align: left;
  padding: 8px;
}


tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Student Profile:</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Details</th>
    
  </tr>
  <tr>
    <th>Student Register Number:</th>
    <td><?php  echo $field1;  ?></td>
   
  </tr>
  <tr>
    <th>Student_FirstName:</th>
    <td><?php  echo $field2;  ?></td>
    
  </tr>
  <tr>
    <th>Student_LastName</th>
    <td><?php  echo $field3;  ?></td>
    
  </tr>
  <tr>
    <th>Department:</th>
    <td><?php  echo $field4;  ?></td>
    
  </tr>
  <tr>
    <th>Date_of_Birth:</th>
    <td><?php  echo $field5;  ?></td>
   
  </tr>
  <tr>
    <th>E-mail Address:</th>
    <td><?php  echo $field6;  ?></td>
   
  </tr>
  <tr>
    <th>MOBILE Number:</th>
    <td><?php  echo $field7;  ?></td>
   
  </tr>
   <tr>
    <th>10th Percentage:</th>
    <td><?php  echo $field8;  ?></td>
   
  </tr>
  <tr>
    <th>12th Percentage:</th>
    <td><?php  echo $field9;  ?></td>
   
  </tr>
   <tr>
    <th>UG_Percentage:</th>
    <td><?php  echo $field10;  ?></td>
   
  </tr>
  <tr>
    <th>PG_Percentage:</th>
    <td><?php  echo $field11;  ?></td>
   
  </tr>
  <tr>
    <th>Backlog_History:</th>
    <td><?php  echo $field12;  ?></td>
   
  </tr>
  <tr>
    <th>Current_History:</th>
    <td><?php  echo $field13;  ?></td>
   
  </tr>
  <tr>
    <th>UG_FirstSemester_Mark:</th>
    <td><?php  echo $field14;  ?></td>
   
  </tr>
  <tr>
    <th>UG_SecondSemester_Mark:</th>
    <td><?php  echo $field15;  ?></td>
   
  </tr>
  <tr>
    <th>UG_ThirdSemester_Mark:</th>
    <td><?php  echo $field16;  ?></td>
   
  </tr>
  <tr>
    <th>UG_FourthSemester_Mark:</th>
    <td><?php  echo $field17;  ?></td>
   
  </tr>
  <tr>
    <th>UG_FifthSemester_Mark</th>
    <td><?php  echo $field18;  ?></td>
   
  </tr>
  <tr>
    <th>UG_SixSemester_Mark:</th>
    <td><?php  echo $field19;  ?></td>
   
  </tr>
  <tr>
    <th>PG_FirstSemester_Mark:</th>
    <td><?php  echo $field20;  ?></td>
   
  </tr>
  <tr>
    <th>PG_SecondSemester_Mark:</th>
    <td><?php  echo $field21;  ?></td>
   
  </tr>
  <tr>
    <th>PG_ThirdSemester_Mark:</th>
    <td><?php  echo $field22;  ?></td>
   
  </tr>
  <tr>
    <th>PG_FourthSemester_Mark:</th>
    <td><?php  echo $field23;  ?></td>
   
  </tr>
  <tr>
    <th>PG_FifthSemester_Mark:</th>
    <td><?php  echo $field24;  ?></td>
   
  </tr>
  <tr>
    <th>PG_SixSemester_Mark:</th>
    <td><?php  echo $field25;  ?></td>
   
  </tr>
  <tr>
    <th>Study_ofGap:</th>
    <td><?php  echo $field26;  ?></td>
   
  </tr>
  <tr>
    <th>DayScholor/Hostel:</th>
    <td><?php  echo $field27;  ?></td>
   
  </tr>
  <tr>
    <th>Age:</th>
    <td><?php  echo $field28;  ?></td>
   
  </tr>
  <tr>
    <th>Residentential Address:</th>
    <td><?php  echo $field29;  ?></td>
   
  </tr>
  













  
</table>

</body>
</html>










<?php
         
         

          
          


          //you want without html code remove coment line in below code.
        //echo '<h4>Student_ID :</h4>'. $row["Student_ID"]. "<br>". " Student_Name :" . $row["name"]. "<br>" ."Father Name:". $row["father"]. " <br>" ."Mother Name". $row["mother"]. "<br>" ."Email Address: ". $row["email"]."<br>";     
    }
} else {
    echo "<script>alert('Your Details is Not Available and Register Your Details')</script>";
}



mysqli_close($conn);
?> 
 



