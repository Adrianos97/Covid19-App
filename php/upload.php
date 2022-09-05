<?php
include ("connect.php");
	$f=rand(1,10000).rand(1,10000).rand(1,10000).rand(1,10000);
	
	if(move_uploaded_file($_FILES['file']['tmp_name'],"../upload/$f"))
	{
		$s=file_get_contents("../upload/$f");
		$json=json_decode($s);
		
		$comma="";
		$comma2="";
		$comma3="";
		$sql="";
		$sql1="insert into poi(id,name,address,lat,lng,rating,rating_n) values ";
		$sql2="insert into types(type,id_poi) values ";
		$sql3="insert into dates(day,popular,hour,id_poi) values ";
		foreach ($json as $j)
		{
			
			$id=@$j->id;
			mysqli_query($connection,"delete from poi where id ='$id'");
			
			$name=htmlspecialchars(@$j->name, ENT_QUOTES);
			
			$address=htmlspecialchars(@$j->address, ENT_QUOTES);
			$lat=@$j->coordinates->lat;
			$lng=@$j->coordinates->lng;
			$rating=@$j->rating;
			$rating_n=@$j->rating_n;
			
			$type=@$j->types;
			$dates=@$j->populartimes;
			$sql1=$sql1.$comma."('$id','$name','$address','$lat','$lng','$rating','$rating_n')";
			$comma=",";
			foreach ($type as $t)
			{	
				
				$sql2=$sql2.$comma2."('$t','$id')";
				$comma2=",";
			}
			
			foreach ($dates as $d)
			{	
				$day=$d->name;
				$p=$d->data;
				for($i=0;$i<24;$i++)
				{
					$sql3=$sql3.$comma3."('$day','".$p[$i]."','$i','$id')";
					$comma3=",";
				}
			}
			
			
		}
		
		
		
		
		if(!mysqli_query($connection,$sql1))
		{
		echo "1";
		}

		if(!mysqli_query($connection,$sql2))
		{
		echo "2";
		}
		
		if(!mysqli_query($connection,$sql3))
		{
		echo "3";
		}
		echo "ok";
		unlink("../upload/$f");
		
	}
	else
	{
								
		echo "error";
								
	}
								
								
								




?>