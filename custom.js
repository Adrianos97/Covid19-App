 $(document).ready(function(){
 
	$("#frm1").submit(function(event){
	
	
		
		event.preventDefault();
		
		$.post("php/insert_user.php",$("#frm1").serialize(), function (res){
			if(res=="ok")
			{
				
				$("#minima2").html("<h1>Your Account Created</h1>");
			}
			else
			{
				
				$("#minima2").html("<b class=error>This email or username exists</b>");
				
			}	
		
		});
	
	
		
	});
	 
	 
	 
	 $("#frm2").submit(function(event){
	
	
		
		event.preventDefault();
		
		$.post("php/loginuser.php",$("#frm2").serialize(), function (res){
			if(res=="ok")
			{
				window.location.href='loginuser.php';
			}
			else
			{
				
				$("#minima").html("<b class=error>Error username or password</b>");
				console.log(res);
			}	
		
		});
	
	
		
	});
	 
	 
	 
	 
$("#frm3").submit(function(event){
	
	
		
		event.preventDefault();
		
		$.post("php/loginadmin.php",$("#frm3").serialize(), function (res){
		
			if(res=="ok")
			{
				window.location.href='loginadmin.php';
			}
			else
			{
				
				$("#minima").html("<b class=error>Error username or password</b>");
				console.log(res);
			}	
		
		});
	
	
		
	}); 
	 



	 
$("#frm4").submit(function(event){
	
	
		 $("#minima").html("<h1>Waiting...</h1>");
		event.preventDefault();
		var fd = new FormData();
        var files = $('#f1')[0].files[0];
        fd.append('file', files);
		$.ajax({
                    url: 'php/upload.php',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(res){
						console.log(res);
                        if(res =="ok"){
                           $("#minima").html("<h1>Your File Uploaded</h1>");
                        }
                        else{
                             $("#minima").html("<h1 class=error>Your File did not Upload</h1>");
                        }
                    },
                });
		

		
	}); 
	
	
	$("#delall").click(function(event){
		$.get("php/delall.php",function (res){
			if(res =="ok"){
                           $("#minima").html("<h1>Your Data Deleted</h1>");
                        }
                        else{
                             $("#minima").html("<h1 class=error>Your Data did not Delete</h1>");
                        }
		});
	});
	 	 
		 
    $("#frm101").submit(function(res){
	
		event.preventDefault();
		
		$.post("php/saveuser.php",$("#frm101").serialize(), function (res){
			if(res=="ok")
			{
				$("#minima2").html("<h1>Your details saved</h1>");
			}
			else
			{
				
				$("#minima2").html("<b class=error>Error username or password</b>");
				
			}	
		
		});

	});
	
	
	$("#frm102").submit(function(res){
	
		
		event.preventDefault();
		
		$.post("php/setvisit.php",$("#frm102").serialize(), function (res){
		console.log(res);
			if(res=="ok")
			{
				$("#minima2").html("<h1>Your visit saved</h1>");
			}
			else
			{
				
				$("#minima2").html("<b class=error>Error</b>");
				
			}	
		
		});

	});
	
	
	
	$("#frm103").submit(function(res){
	
		
		event.preventDefault();
		
		$.post("php/poscovid.php",$("#frm103").serialize(), function (res){
		
			if(res=="ok")
			{
				$("#minima2").html("<h1>You declared as positive</h1>");
			}
			else
			{
				
				$("#minima2").html("<b class=error>Error</b>");
				
			}	
		
		});

	});
	
	
 
 });
 
 
// apo internet 
function distance(lat1, lon1, lat2, lon2) {
        var radlat1 = Math.PI * lat1/180;
        var radlat2 = Math.PI * lat2/180;
        var theta = lon1-lon2;
        var radtheta = Math.PI * theta/180;
        var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
        dist = Math.acos(dist);
        dist = dist * 180/Math.PI;
        dist = dist * 60 * 1.1515;
        dist = dist * 1.609344 ;
        
        return dist;
}
