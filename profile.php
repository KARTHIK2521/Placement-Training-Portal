<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <title>Profile</title>

   <style>
   	

   	body
   	{
   			font-family: Arial, Helvetica, sans-serif;
		    /*background-color: dodgerblue;*/
        background-repeat: no-repeat;
        background-size: cover;
   	}
    input[type=text]{

      border-radius: 50px;
    }

   	{box-sizing: border-box}

   input[type=number], input[type=email],input[type=date]{

      border-radius: 50px;

       width: 40%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
    }

    {box-sizing: border-box}



/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=date] {
  width: 40%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/*input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 50px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 1.0;
}

.registerbtn:hover {
  opacity:5;
}


}



   </style>

   
</head>
<body background="bg.jpg">                <!--- oncontextmenu="return false"   this code is disable the wright click on website -->
  


 <div class="container">
       <nav class="navbar navbar-default">
          <div class="container-fluid">
             <div class="navbar-header">
                  <a class="navbar-brand" href="#"><font color="red">KEC</font></a>
              </div>
                 <ul class="nav navbar-nav">
                       <li><a href="project.html">Home</a></li>
                       <li><a href="Recruiter.html">Our Requirter</a></li>
                       <li><a href="#">Placement Detail</a></li>
                       <li><a href="#">News and Events</a></li>
                       <li><a href="material.html">Placement Material</a></li>
                       <li><a href="#">Contact Us</a></li>
                       <li><a href="show.php">View Profile</a></li>
                  </ul>



             </div>
    
         </nav>

</div>
   



    <form method="post" action="pro.php">
 	 <div class="container">
    	<center><h1>Registration Form</h1></center>
    
    	<hr>

    		<div class="form-group">
          
          <center>
        <input type="text" placeholder="Enter your Register Number" name="regnum" pattern="[1-9]{2}[A-Za-z]{3}[0-9]{3}" title="Seven letter register number" required >

        
    		<center>
	    	<input type="text" placeholder="First Name" name="fname" required><br><br></center>

       		<center>
    		<input type="text" placeholder="Last Name" name="lname" required><br><br></center>

		     <center>
	    	<input type="text" placeholder="Department" name="dept" required><br><br></center>

	    	<center>
    		<input type="date" placeholder="Year\Month\Date" name="dob" max="2019-04-30"  required><br><br></center>

    	 	<center>
	    	<input type="email" placeholder="Email address" name="email" pattern="[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{2,}$" required><br><br></center>

     		<center>
    		<input type="text" placeholder="Mobile" name="mbl"  pattern="[6-9]{1}[0-9]{9}"  required><br><br></center>

    	 	<center>
	    	<input type="text" placeholder="10th Percentage" name="tenper"   pattern="[0-9]{2}"  required><br><br></center>

	    	<center>
	    	<input type="text" placeholder="12th Percentage" name="tweper" pattern="[0-9]{2}"  required><br><br></center>

	    	<center>
	    	<input type="text" placeholder="UG Percentage" name="ugper" required><br><br></center>

	    	<center>
	    	<input type="text" placeholder="PG Percentage" name="pgper" required><br><br></center>

    		<center>
    		<input type="text" placeholder="Backlogs History" name="bhistory" required><br><br></center>

    		<center>
    		<input type="text" placeholder="Current Backlogs" name="cbhistory" required><br><br></center>

    		<center>
    		<input type="text" placeholder="UG 1st sem GPA " name="ug1" required><br><br></center>

    		<center>
    		<input type="text" placeholder="UG 2nd sem GPA" name="ug2" required><br><br></center>

    		<center>
    		<input type="text" placeholder="UG 3rd sem GPA" name="ug3" required><br><br></center>

    		<center>
    		<input type="text" placeholder="UG 4th sem GPA" name="ug4" required><br><br></center>

    		<center>
    		<input type="text" placeholder="UG 5th sem GPA" name="ug5"><br><br></center>

    		<center>
    		<input type="text" placeholder="UG 6th sem GPA" name="ug6"><br><br></center>

    		<center>
    		<input type="text" placeholder="PG 1st sem GPA" name="pg1"><br><br></center>

    		<center>
    		<input type="text" placeholder="PG 2nd sem GPA" name="pg2"><br><br></center>

    		<center>
    		<input type="text" placeholder="PG 3rd sem GPA" name="pg3"><br><br></center>

    		<center>
    		<input type="text" placeholder="PG 4th sem GPA" name="pg4"><br><br></center>

    		<center>
    		<input type="text" placeholder="PG 5th sem GPA" name="pg5"><br><br></center>

    		<center>
    		<input type="text" placeholder="PG 6th sem GPA" name="pg6"><br><br></center>

    		<center>
    		<input type="text" placeholder="Any gap in Studies" name="gap" required><br><br></center>

    		<center>
    		<input type="text" placeholder="Dayscholar/Hostel" name="d_h" required><br><br></center>

    		<center>
    		<input type="text" placeholder="Age" name="age" maxlength="2" required><br><br></center>

    		<center>
    		<input type="text" placeholder="Address" name="address" required><br><br></center>

    		


        </div>


    		

    	<hr>

   
   		<center><button type="submit" name="save" class="registerbtn">Register</button></center> 
 	 </div>

 
	</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>