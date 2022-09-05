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
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
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

	<form action='' method=post id=frm102>
		 <div class="form-group">
				<label for="np">Number of Persons in Place:</label>
				<input type="text" class="form-control" id="np" name="np" value=1>
			  </div>
			  <input type="hidden" name=pid id=pid value='<?php echo $_GET['pid']; ?>'>
			  <button type="submit" class="btn btn-default" >Save</button>
	
	</form>
	<div id=minima2></div>
	<br><br><br>

</div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Syrros Adrianos <a href="https://www.ceid.upatras.gr">www.ceid.upatras.gr</a></p> 
</footer>

</body>
</html>
