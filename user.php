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
        
        <li><a href="index.html">Main</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">

<div class='col-md-4'></div>
<div class='col-md-4'>
  <h3 class="margin">Login as User</h3>
  
  <form action="" id=frm2>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="usr1" name="usr1">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd1" name="pwd1">
  </div>
  
  <button type="submit" class="btn btn-default">Login</button>
</form>
<div id=minima></div>


<br><br>


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Create a new Account</button>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Account</h4>
      </div>
      <div class="modal-body">
			<form action="" id=frm1>
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
			  
			  <button type="submit" class="btn btn-default" >Create</button>
			  
			</form>
		<div id=minima2></div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  
</div>

</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Syrros Adrianos <a href="https://www.ceid.upatras.gr">www.ceid.upatras.gr</a></p> 
</footer>

</body>
</html>
