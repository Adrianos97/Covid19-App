<?php
include ("connect.php");

if(mysqli_query($connection,"update users set username='$_POST[username]',
								password='$_POST[pwd]',
								email='$_POST[email]'
								where username='$_SESSION[usr]' 
								"))
								{
									echo "ok";
								
								}
								else
								{
								
									echo "insert into users set username='$_POST[username]',
								password='$_POST[pwd]',
								email='$_POST[email]'";
								
								}
								
								
								




?>