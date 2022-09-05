<?php
include ("connect.php");

		
	if(mysqli_query($connection, "delete from poi"))
	{
		
		echo "ok";
	}
	else
	{
								
		echo "error";
								
	}
								
								
								




?>