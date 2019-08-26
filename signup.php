<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<title>Sign Up</title>

<style>


body 
    
   /* {background-image: url("bg.jpg");}*/

{
    font-family: Arial, Helvetica, sans-serif;
    background-repeat: no-repeat;
    background-size: cover;

  
}

 {box-sizing: border-box;}

.input-container1 {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-top: 10px;
  margin-bottom: 15px;
  margin-left: 350px;
}

.input-container2 {
  display: -ms-flexbox; /* IE10 */
  display: flex;

  width: 100%;
  margin-top: 100px;
  margin-left: 550px;
  margin-bottom: 15px;
  /*  margin-left: 100px;*/
}


.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  margin-left: 350px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  margin-left: 350px;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body background="bc.jpg">

<form action="sinup.php" method="post" style="max-width:500px;margin:5%">

    <div class="input-container2"><h2>Sign Up</h2></div> 

  
  <div class="input-container1">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm" pattern="[1-9]{2}[A-Za-z]{3}[0-9]{3}">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw" required="password is required" pattern=".{6,10}" title="Six or less than 10 characters"> 
  </div>

   <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{2,}$" required>
  </div>

  <button type="submit"  name="save1" class="btn" >Submit</button><br><br>

   <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="number" placeholder="Enter OTP" name="otp">
  </div>

  <button type="submit"  name="save"  class="btn">Register</button>

</form>

</body>
</html>
