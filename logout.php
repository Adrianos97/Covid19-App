<?php
session_start();
session_destroy();

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
        <li><a href="admin.php">Admin</a></li>
        <li><a href="user.php">User</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">

<div class='col-md-4'></div>
<div class='col-md-4'>
	<h2>Thank you for using the application</h2>
</div>

</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Syrros Adrianos <a href="https://www.ceid.upatras.gr">www.ceid.upatras.gr</a></p> 
</footer>

</body>
</html>
