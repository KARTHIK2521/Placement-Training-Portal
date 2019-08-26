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

$dept=$_POST['dept'];
$tenper=$_POST['tenper'];
$twelveper=$_POST['tweper'];


$result = mysqli_query($conn,"SELECT * FROM profile where dept='$dept'  AND tenth_per <'$tenper' AND twelve_per <'$twelveper' ");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
<style type="text/css">
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}


</style>

 </head>
<body>
  <table>
  
  <tr>
    <td>Roll No</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Department</td>
    <td>Date Of Birth</td>
    <td>Email Id</td>
    <td>Mob No</td>
    <td>10th %</td>
    <td>12th %</td>
    <td>UG Mark</td>
    <td>PG Mark</td>
   
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["rno"]; ?></td>
<td><?php echo $row["fname"]; ?></td>
<td><?php echo $row["lname"]; ?></td>
<td><?php echo $row["dept"]; ?></td>
<td><?php echo $row["dob"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["mob"]; ?></td>
<td><?php echo $row["tenth_per"]; ?></td>
<td><?php echo $row["twelve_per"]; ?></td>
<td><?php echo $row["ug_per"]; ?></td>
<td><?php echo $row["pg_per"]; ?></td>



</tr>
<?php
$i++;
}
?>
</table>
 </body>
</html>