<?php
session_start();
if(@$_SESSION['usr']=="")
{
echo "Error connection.";
die();
}

?>
<!DOCTYPE html>
<html>
<head>
 
  <title>COVID19</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
  <link rel="stylesheet" href="custom.css">
  <script src="custom.js"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">COVID19</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="loginuser.php">Main</a></li>
		
		<li><a href="poscovid.php">Positive Covid</a></li>
		<li><a href="poscovid.php">Covid Contact</a></li>
		<li><a href="profile.php">Profile</a></li>
		 <li><a href="logout.php">Logout</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
<select class="form-control" id='categories'>

</select>
<div class='col-md-12'>

	<div id=map></div>


</div>
<script>
$.get("php/getcategories.php",function(res)
{
	
	var js=JSON.parse(res);
	h="<option>Select Type</option>";
	for (i=0;i<js.length;i++)
		h+="<option>"+js[i].type+"</option>";
	
	$("#categories").html(h);	
	

});
var map;
var PT=[];
$("#categories").change(function(){showmarkers()});

map = L.map('map');
map.locate({setView: true, maxZoom: 15});
map.on('locationfound', onLocationFound);

 L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoicHBvbHlkMDEiLCJhIjoiY2t6MnM1NW4xMDB2bDJvcDJ2NW04enZkNSJ9.SR1qSNVWd5oSCGgU1kjRQg'
}).addTo(map);

var myplace;
var aR=200;
 function onLocationFound(e) {
    var radius = e.accuracy;
	myplace=e.latlng;
    L.marker(e.latlng).addTo(map)
        .bindPopup("Your place").openPopup();

    L.circle(e.latlng, radius).addTo(map);
}


function showmarkers()
{ 
cat=$("#categories").val();
		
	$.get("php/getpois.php?c="+cat,function(res){
		var js=JSON.parse(res);
		console.log(PT);
		for (var i=0;i<PT.length;i++)
			PT[i].remove();
		PT=[];
		for (var i=0;i<js.length;i++)
		{
			
			
			var g="http://maps.google.com/mapfiles/kml/paddle/grn-circle.png";
			var r="http://maps.google.com/mapfiles/kml/paddle/red-circle.png";
			var o="http://maps.google.com/mapfiles/kml/paddle/orange-circle.png";
			
			
			if(js[i].popular<=32) im1=g;
			if(js[i].popular>32 && js[i].popular<=65) im1=o;
			if(js[i].popular>65 ) im1=r;
			
			
			
			var m=L.marker([js[i].lat/1, js[i].lng/1], {
						icon:L.icon({iconUrl:im1, iconSize:[50,50]})
					,  pop:js[i].popular, pid:js[i].pid
					
					}).addTo(map).on('click', function(e)
					{
						var id=this.options.idmark;
						s="Estimate Popular:"+this.options.pop;
						console.log(e.latlng.lat+" "+e.latlng.lng+" "+myplace.lat+" "+myplace.lng);
						
						if(distance(e.latlng.lat,e.latlng.lng,myplace.lat,myplace.lng)<aR)
						{
							s=s+"<br><a href='setvisit.php?pid="+this.options.pid+"'>Set Visit</a>";
						}
					
						var popup = L.popup()
									.setLatLng(e.latlng)
									.setContent(s)
									.openOn(map);
					});
					
					
			
			
			
			PT.push(m);
			 
		}
			
	});
	
}
</script>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Syrros Adrianos <a href="https://www.ceid.upatras.gr">www.ceid.upatras.gr</a></p> 
</footer>

</body>
</html>
