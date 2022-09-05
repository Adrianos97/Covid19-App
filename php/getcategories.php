<?php
include ("connect.php");

$q=mysqli_query($connection,"select distinct type from types order by type");
$R=[];
while($r=mysqli_fetch_assoc($q)) $R[]=$r;

echo json_encode($R);


?>