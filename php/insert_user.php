<?php
include ("connect.php");

if(mysqli_query($connection,"insert into users set username='$_POST[username]',
								password='$_POST[pwd]',
								email='$_POST[email]'"))
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