<?php
include ("connect.php");

if(mysqli_query($connection,"
INSERT INTO poi_users ( id_poi, usr, cur_visit, datetime_visit) 
VALUES ( '$_POST[pid]', '$_SESSION[usr]', '$_POST[np]', now())"))
								{
									echo "ok";
								
								}
								else
								{
								
									echo "error";
								
								}
						

?>