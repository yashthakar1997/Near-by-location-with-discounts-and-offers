<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div class="header" id="head">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Untitled Document</title>
  <style type="text/css">
<!--
#Layer1 {
	position: absolute;
	width: 1184px;
	height: 786px;
	z-index: 1;
	left: 92px;
	top: -5px;
}
#main {
	border:solid;
}
#slide_img{	
	border:solid;
}
#offers{
	border:solid;	
}
#developeroption{
	border:solid;	
}
#menu{
	border:solid;	
}
#header{
	border:solid;
}
-->
  </style>



   
   
   <style>
      html, body, #map-canvas {
        height: 90%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true">
    var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
    var mapOptions = {
    	zoom: 4,
    	center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	// To add the marker to the map, use the 'map' property
	var marker = new google.maps.Marker({
    	position: myLatlng,
    	map: map,
    	title:"Hello World!"
	});
    
    
    
    
    </script>
    
    
    <script>











     var map;
     function initialize() {
     var mapOptions = {
     zoom: 10
     };
      map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // Try HTML5 geolocation
    if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'your location is !!'
      });

      map.setCenter(pos);
      }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
   
   
   





  </head>
  <body>
  <div id="Layer1" align="center">
  
  
  
    <div class="header" id="header" style="float:left;height:100px;width:20px;" >
      <img src="logo.png" height="100px">
    </div>
    <div class="header" id="header" style="height:100px;"><p><h1 align="center">Near By Location</h1></p></div>
		
		
    <div class="menu" id="menu" style="height:50px;">
		<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th height="45" scope="col">Home</th>
    <th scope="col"><a href="login.php">Log in</a></th>
    <th scope="col"><a href="Registration.php">Registration</a></th>
    <th scope="col">Offers</th>
    <th scope="col">About</th>
  </tr>
</table>
 </div>
        <div class="maincontent" id="main" style="float:left;height:400px;width:700px;">
		
		<div id="map-canvas"></div>








		</div>
        
		<div class="offers" id="offers" style="height:400px;">
        
        
        
       <?php
        $con=mysql_connect("localhost","root");
		
		mysql_select_db("project",$con);
        $sql="select * from cafes";
		
        $e=mysql_query($sql);
        
		$retval = mysql_query( $sql, $con );
        if(! $retval )
        {
         	die('Could not get data: ' . mysql_error());
       	}
        while($row = mysql_fetch_assoc($retval))
       	{
		 	 $lat = $row['location_lat']; 
		  	echo "{$row['name']}  <br>";
       	} 
	   
	   
	   
	  ?>
        
        </div>
		
  
  
        <div class="img" id="slide_img" style="height:135px"><h1>slide images</h1>
        </div>
        
        
        <div class="footer" id="developeroption" style="height:100px"><h1>Developer option</h1>
          <p>&nbsp;</p> 
        </div>
        
        
  </div>
  </body>
  </html>
</div>
