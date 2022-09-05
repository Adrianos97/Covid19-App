<?php
include ("connect.php");

$q=mysqli_query($connection,"select * from users where username='$_SESSION[usr]'");
$r=mysqli_fetch_assoc($q);

echo json_encode($r);
	
								
								
								




?>