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


if(isset($_POST['save']))
{  
   $s_rno=$_POST['regnum'];
   $s_fname=$_POST['fname'];
   $s_lname=$_POST['lname'];
   $deptr=$_POST['dept'];
   $d_ob=$_POST['dob'];
   $email=$_POST['email'];
   $mobile=$_POST['mbl'];
   $tenth=$_POST['tenper'];
   $twelve=$_POST['tweper'];
   $ug=$_POST['ugper'];
   $pg=$_POST['pgper'];
   $backlog=$_POST['bhistory'];
   $curbac=$_POST['cbhistory'];
   $ugone=$_POST['ug1'];
   $ugtwo=$_POST['ug2'];
   $ugthree=$_POST['ug3'];
   $ugfour=$_POST['ug4'];
   $ugfive=$_POST['ug5'];
   $ugsix=$_POST['ug6'];
   $pgone=$_POST['pg1'];
   $pgtwo=$_POST['pg2'];
   $pgthree=$_POST['pg3'];
   $pgfour=$_POST['pg4'];
   $pgfive=$_POST['pg5'];
   $pgsix=$_POST['pg6'];
   $anygap=$_POST['gap'];
   $dayhst=$_POST['d_h'];
   $age=$_POST['age'];
   $add=$_POST['address'];



 mysqli_query($conn,"insert into profile values ('$s_rno',' $s_fname','$s_lname','$deptr','$d_ob', '$email', '$mobile', '$tenth','$twelve','$ug','$pg','$backlog','$curbac','$ugone','$ugtwo','$ugthree','$ugfour','$ugfive','$ugsix','$pgone','$pgtwo','$pgthree','$pgfour','$pgfive','$pgsix','$anygap','$dayhst','$age','$add')") or die("Already this Register Number is Saved please check your Register number: ".mysqli_error($conn));
   echo "<p align=centre>Youe data is successfully inserted.</p>";

//(rno, fname, lname, dept, dob, email, mob,tenth_per, twelve_per,ug_per, pg_per, back_his, cur_back, ug_one, ug_two, ug_three, ug_four, ug_five, ug_six, pg_one, pg_two, pg_three, pg_four,pg_five, pg_six, study_gap, day_hos, age,address) 

}
else {
    echo "Your Student_ID is not Matched";
}





mysqli_close($conn);

?>