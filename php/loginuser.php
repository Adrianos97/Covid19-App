<?php
include ("connect.php");

$q=mysqli_query($connection,"select * from users where username='$_POST[usr1]' and password='$_POST[pwd1]'");

	if(mysqli_num_rows($q)>0)
	{
		echo "ok";
		$_SESSION['usr']=$_POST['usr1'];
	}
	else
	{
								
		echo "select * from users where username='$_POST[usr1]' and password='$_POST[pwd1]'";
								
	}
								
								
								




?>