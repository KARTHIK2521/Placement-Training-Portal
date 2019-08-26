<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="button.css">
   <title>AdminProfile</title>

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
                       
                       <li><a href="#">Placement Material</a></li>
                       <li><a href="#">Contact Us</a></li>
                       


                         <li class="dropdown">
                        <a href="javascript:void(0)">View Report</a>
                        <div class="dropdown-content">

                             <a href="adminprofile.php">AboveMark</a>
                             <a href="adminpro1.php">Below Mark</a>

                      </div>
                      </li>



                  </ul>



             </div>
    
         </nav>

</div>
   



    <form method="post" action="adminretrive1.php">
 	 <div class="container">
    	
    
    	<hr>

    		<div class="form-group">
        
    		
		     <center>
	    	<input type="text" placeholder="Department" name="dept" required><br><br></center>

	    	

    	 	<center>
	    	<input type="text" placeholder="10th Percentage" name="tenper"   pattern="[0-9]{2}"  required><br><br></center>

	    	<center>
	    	<input type="text" placeholder="12th Percentage" name="tweper" pattern="[0-9]{2}"  required><br><br></center>

	    	

        </div>


    		

    	<hr>

   
   		<center><button type="submit1" name="save1" class="registerbtn">Below Mark </button></center> 
       
 	 </div>

 
	</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>