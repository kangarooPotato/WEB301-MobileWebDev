<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://maps.google.com/maps/api/js?key="></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Contact us</title>
</head>

<body>
    <div class="container">
        <div id=navigation>
            <?php
				include('includes/header.php');
			?>
        </div>

        <div id="main">

            <style>
                #googleMap {
                    width: 100%;
                    height: 400px;
                }

                @media all and (max-width: 639px) {
                    #googleMap {
                        width: 100%;
                        height: 600px;
                    }
                }

            </style>



            <script>
                function getLocation() {
                    if (navigator.geolocation) {
                        console.log("asking for location");
                        navigator.geolocation.getCurrentPosition(showPosition, showError);
                    } else {
                        document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
                    }
                }

                function showPosition(position) {
                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;

                    var dir_url = "https://www.google.ca/maps/dir/" + lat + "," + lon + "/Apple+Park/@37.3349218,-122.0108044,17.58z";

                    document.getElementById("directions").innerHTML = "<br><a href='" + dir_url + "'>GET DIRECTIONS TO THE APPLE PARK</a><br>";

                    showMap(position);
                }

                function showMap(position) {
                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;
                    var zoom = 12;

                    if (window.innerWidth > 639) {
                        zoom = 7;
                    } else {
                        zoom = 14;
                    }

                    const myCenter = {
                        lat: lat,
                        lng: lon
                    };

                    var mapProperties = {
                        center: myCenter,
                        zoom: zoom,
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProperties);

                    var marker = new google.maps.Marker({
                        position: myCenter
                    });
                    marker.setMap(map);

                    google.maps.event.addDomListener(window, "resize", function() {
                        if (window.innerWidth > 639) {
                            map.setZoom(12);
                        } else {
                            map.setZoom(18);
                        }
                    });
                }

                function showError(error) {
                    var myDiv = document.getElementById("location");
                    switch (error.code) {
                        case error.PERMISSION_DENIED:
                            myDiv.innerHTML = "User denied the request for Geolocation."
                            break;
                        case error.POSITION_UNAVAILABLE:
                            myDiv.innerHTML = "Location information is unavailable."
                            break;
                        case error.TIMEOUT:
                            myDiv.innerHTML = "The request to get user location timed out."
                            break;
                        case error.UNKNOWN_ERROR:
                            myDiv.innerHTML = "An unknown error occurred."
                            break;
                    }
                }

            </script>

            <h2>Click the button to get your coordinates.</h2>

            <button onclick="getLocation()">Show My Location</button>

            <p id="location"></p>
            <div id="googleMap"></div>
            <div id="directions"></div><br>
            
        <?php
			include('includes/simple-form.php');
		?>


        </div>


        <div class="footer">

            <?php
			include('includes/footer.php');
		      ?>
            <!--
			<div class="col1"></div>
			<div class="col2"></div>
			<div class="col3"></div>
-->
        </div>
    </div>

</body>

</html>
