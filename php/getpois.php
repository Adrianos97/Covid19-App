<?php
include ("connect.php");
		$hour=date("H");
		$day=date("l");
$q=mysqli_query($connection,"select *,poi.id as pid from poi,types, dates where 
			types.id_poi=poi.id and types.type='$_GET[c]'
			and dates.id_poi=poi.id and dates.day='$day' and dates.hour='$hour'");
			
			
$J=[];
while($r=mysqli_fetch_assoc($q)) $J[]=$r;

echo json_encode($J);
	
								
								
								




?>