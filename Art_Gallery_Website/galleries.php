<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="style2.css" />

<title>Galerie d'Art</title>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>

<style>
 #gmap_canvas {
 
    height: 400px;
    position: relative;
    width: 600px;
	margin:30px;
	border:3px solid gray;
	<!--
	height:80%;
	width:70%;
	-->
}

.actions {
<!--
    background-color: #FFFFFF;
    bottom: 30px;
    padding: 10px;
    position: relative;
    float: right;
    right: 30px;
    z-index: 2;
    border: 1px solid #abbbcc;
    border-radius: 12px;
	-->
	height: 300px;
    position: relative;
    width: 200px;
	margin:30px;
	margin-top:80px;
	float:right;
	padding:20px;
	background-color: #FFFFFF;
}

.actions label {
    display: block;
    margin: 2px 0 5px 10px;
    text-align: left;
}

.actions input, .actions select {
    width: 85%;
}

.button {
    background-color: #d7e5f5;
    border: 1px solid #abbbcc;
    border-radius: 12px;
    box-shadow: inset 0 1px 0 0 white;
    color: #1a3e66;
    font: normal 11px Verdana, sans-serif;
    line-height: 1;
    margin-bottom: 5px;
    padding: 6px 0 7px 0;
    text-align: center;
    text-shadow: 0 1px 1px #fff;
    width: 150px;
}

.button:hover {
    background-color: #ccd9e8;
    border: 1px solid #a1afbf;
    color: #163659;
    cursor: pointer;
}

.button:active {
    border: 1px solid #8c98a7;
}

#button1, #button2
 {
	color : black;
}
</style>
</head>
<body>
   
<?php include("menu.php"); ?>
   
<script>
var geocoder;
var map;
var markers = Array();
var infos = Array();

//To get geolocation 
function getLocation() {
    if (navigator.geolocation) {		
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        alert("Geolocation is not supported by this browser");
    }
}

function showPosition(position) {	
	var type = "art_gallery";
    var radius = 5000;
    var keyword = document.getElementById('gmap_keyword').value;

	var cur_location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
	map.setCenter(cur_location);
	// and then - add new custom marker
	var addrMarker = new google.maps.Marker({
		position: cur_location,
		map: map,
		icon: 'marker.png'
	});
	
	// prepare request to Places
	var request = {
		location: cur_location,
		radius: radius,
		types: [type]
	};
	if (keyword) {
		request.keyword = [keyword];
	}
	// send request
	service = new google.maps.places.PlacesService(map);
	service.search(request, createMarkers);	
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable");
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out");
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred");
            break;
    }
}

function initialize() {
    geocoder = new google.maps.Geocoder();	
	
    // set initial position (Santa Clara)	
    var myLatlng = new google.maps.LatLng(37.3488727,-121.93824199999999);

    var myOptions = { // default map options
        zoom: 14,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
}

// clear overlays function
function clearOverlays() {
    if (markers) {
        for (i in markers) {
            markers[i].setMap(null);
        }
        markers = [];
        infos = [];
    }
}

// clear infos function
function clearInfos() {
    if (infos) {
        for (i in infos) {
            if (infos[i].getMap()) {
                infos[i].close();
            }
        }
    }
}

// find address of location specified
function findAddress() {
    var address = document.getElementById("gmap_where").value;

    // script uses our 'geocoder' in order to find location by address name
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) { // and, if everything is ok

            // we will center map
            var addrLocation = results[0].geometry.location;
            map.setCenter(addrLocation);

            // store current coordinates into hidden variables
            document.getElementById('lat').value = results[0].geometry.location.lat();
            document.getElementById('lng').value = results[0].geometry.location.lng();

            // and then - add new custom marker
            var addrMarker = new google.maps.Marker({
                position: addrLocation,
                map: map,
                title: results[0].formatted_address,
                icon: 'marker.png'
            });
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}

// find custom places function
function findGalleries() {
	var type = "art_gallery";
    var radius = 5000;
    var keyword = document.getElementById('gmap_keyword').value;
	
	if(document.getElementById("gmap_where").value == "")
	{
		getLocation();	
	}
	else
	{	
		findAddress();
		var lat = document.getElementById('lat').value;
		var lng = document.getElementById('lng').value;
		var cur_location = new google.maps.LatLng(lat, lng);

		// prepare request to Places
		var request = {
			location: cur_location,
			radius: radius,
			types: [type]
		};
		if (keyword) {
			request.keyword = [keyword];
		}

		// send request
		service = new google.maps.places.PlacesService(map);
		service.search(request, createMarkers);
	}
}

// create markers (from 'findGalleries' function)
function createMarkers(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        // if we have found something - clear map (overlays)
        clearOverlays();
        // and create new markers by search result
        for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
        }
    } else if (status == google.maps.places.PlacesServiceStatus.ZERO_RESULTS) {
        alert('Sorry, nothing is found');
    }
}

// create single marker function
function createMarker(obj) {

    // prepare new Marker object
    var mark = new google.maps.Marker({
        position: obj.geometry.location,
        map: map,
        title: obj.name
    });
    markers.push(mark);

    // prepare info window - name of gallery and address
    var infowindow = new google.maps.InfoWindow({
        content: '<img src="' + obj.icon + '" /><br/><font style="color:red;"><b>' + obj.name + 
        '</b><br /><font style="color:black;"><b>Address: ' + obj.vicinity + '</b></font>'
    });

    // add event handler to current marker
    google.maps.event.addListener(mark, 'click', function() {
        clearInfos();
        infowindow.open(map,mark);
    });
    infos.push(infowindow);
}

// initialization
google.maps.event.addDomListener(window, 'load', initialize);

</script>
<div class="row">    
<div class="col-6 col-m-9" id="gmap_canvas"></div>

<div class="actions">

    <div class="button">
        <label for="gmap_where">Search at a specific location:</label>
        <input id="gmap_where" type="text" name="gmap_where" />
	</div>
	
	<!--
    <div id="button2" class="button" onclick="findAddress(); return false;">Submit</div>-->

    <div class="button">
        <label for="gmap_keyword">Enter keyword of gallery (optional):</label>
        <input id="gmap_keyword" type="text" name="gmap_keyword" />
	</div>

    <input type="hidden" id="lat" name="lat" value="37.3488727" />
	<input type="hidden" id="lng" name="lng" value="-121.93824199999999" />
	
    <div id="button1" class="button" onclick="findGalleries(); return false;">Click to search art galleries nearby</div>

</div>
</div>    
    
    <div id="footer" style="top:80px;">
    <p><i><strong>&copy; Information uploaded by Galerie d'Art</strong></i></p>
    </div>
</body>
</html>





