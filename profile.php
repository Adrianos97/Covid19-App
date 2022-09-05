<?php
session_start();
if(@$_SESSION['usr']=="")
{
echo "Error connection.";
die();
}

?>
<!DOCTYPE html>
<html>
<head>
 
  <title>COVID19</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="custom.css">
  <script src="custom.js"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">COVID19</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="loginuser.php">Main</a></li>
		
		<li><a href="poscovid.php">Positive Covid</a></li>
		<li><a href="poscovid.php">Covid Contact</a></li>
		<li><a href="profile.php">Profile</a></li>
		 <li><a href="logout.php">Logout</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">

<div class='col-md-4'></div>
<div class='col-md-4'>
	<h1> Profile </h1>
	<form action="" id=frm101>
			  <div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" name="username">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*_=+-]).{8,}">
			  </div>
			  <div class="form-group">
				<label for="email">email:</label>
				<input type="email" class="form-control" id="email" name="email">
			  </div>
			  
			  <button type="submit" class="btn btn-default" >Save</button>
			  
			</form>
</div>
<script>
$.get("php/getuser.php",function(res){
	js=JSON.parse(res);
	$("#username").val(js.username);
	$("#pwd").val(js.password);
	$("#email").val(js.email);
	
});


</script>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Syrros Adrianos <a href="https://www.ceid.upatras.gr">www.ceid.upatras.gr</a></p> 
</footer>

</body>
</html>
