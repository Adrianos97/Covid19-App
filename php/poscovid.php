<?php
include ("connect.php");

if(mysqli_query($connection,"insert into poscovid set date1 = now(), usr='$_SESSION[usr]'"))
								{
									echo "ok";
								
								}
								else
								{
								
									echo "error";
								
								}
						

?>