<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="language" content="en-us"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Team Relief Chennai | We are a small group of people who took up an initiative to help and rescue people stuck up in floods in Chennai.
    " />
    <meta name="keywords" content="Chennai, Rains, Floods, pray for chennai, chennai rains, rescue, help, ngo, chennai support, chennai sos, chennai emergency" />
    <meta name="distribution" content="Global" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 days"/>
    <meta name="copyright" content="Relief Chennai"/>
    
    <meta charset="utf-8">
    <title>Directions service #Relief Chennai</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
      select{
        display: block !important;
      }
#floating-panel {
  position: absolute;
  top: 65px;
  left:30%;

  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}
@media screen only and (max-width: 768px){
  #floating-panel{
    left: 0% !important; 
  }
} 

    </style>

 

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
<?php

include 'analyticstracking.php';

?>

    
    <?php

    include 'navbar.php';
    include 'funcs.php';
    include 'side-bar1.php';
    echo '

          <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
            <!-- Teal page content

                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->
                <div id="floating-panel" class="col l8 m4 s8">
    <b>Start: (Unsafe Places)</b>
    <select id="start" onchange="calcRoute();">
      <option value="Velachery Bypass Road, Balaji Nagar, Chennai, Tamil Nadu">Velachery Bypass Road, Balaji Nagar, Chennai, Tamil Nadu</option>
      <option value="Srinivasa Road - T Nagar">Srinivasa Road - T Nagar</option>
      <option value="Chettinad Health City Bus Stop">Chettinad Health City Bus Stop</option>
      <option value="Keelkattalai Junction">Keelkattalai Junction</option>
      <option value="Off Vadapalanis Arcot Road">Off Vadapalanis Arcot Road</option>
      <option value="Ritherdon Road">Ritherdon Road</option>
      <option value="Olympia Junction">Olympia Junction</option>
      <option value="Kalakshetra Road">Kalakshetra Road</option>
      <option value="MGR Saalai">MGR Saalai</option>
      <option value="Entrance to Bollineni">Entrance to Bollineni</option>
      <option value="SRP Tools Bus stop">SRP Tools Bus stop</option>
      <option value="Five Furlong Road">Five Furlong Road</option>
      <option value="Bollineni Villas">Bollineni Villas</option>
      <option value="Radhakrishna Salai - 2 ft water">Radhakrishna Salai - 2 ft water</option>
      <option value="Mudichur Road">Mudichur Road</option>
      <option value="83 KGT Nagar, Kattupakan">83 KGT Nagar, Kattupakan</option>
      <option value="Vengaivaasal Main Road">Vengaivaasal Main Road</option>
      <option value="Gandhinagar, Naravarikuppam">Gandhinagar, Naravarikuppam</option>
      <option value="VIT Chennai Campus">VIT Chennai Campus</option>
      <option value="Madipakkam LIC Nagar ">Madipakkam LIC Nagar </option>
      <option value="Thiruvanmiyur RTO Rajaji Nagar">Thiruvanmiyur RTO Rajaji Nagar</option>
      <option value="Saraswathi Hospital">Saraswathi Hospital</option>
      <option value="Motilal Street">Motilal Street</option>
      <option value="Besant Nagar Bus Depot">Besant Nagar Bus Depot</option>
      <option value="Indira nagar first main road.">Indira nagar first main road.</option>
      <option value="Shastri Nagar - First Avenue">Shastri Nagar - First Avenue</option>
      <option value="Mathsya Restaurant - Egmore">Mathsya Restaurant - Egmore</option>
      <option value="CampRoad towards Tambaram East">CampRoad towards Tambaram East</option>
      <option value="Thiruvanmiyur to Kottivakkam Kuppam ">Thiruvanmiyur to Kottivakkam Kuppam </option>
      <option value="3rd street padmanabha nagar">3rd street padmanabha nagar</option>
      <option value="Kotturpuram MRTS Station">Kotturpuram MRTS Station</option>
      <option value="Purushothaman Nagar">Purushothaman Nagar</option>
      <option value="Arundale beach Road">Arundale beach Road</option>
      <option value="Elcot sez, ECR link road">Elcot sez, ECR link road</option>
      <option value="Maduravoyal Service Road">Maduravoyal Service Road</option>
      <option value="GK Moopanar Flyover">GK Moopanar Flyover</option>
      <option value="Sidco Nagar">Sidco Nagar</option>
      <option value="Buzullah Road - T Nagar">Buzullah Road - T Nagar</option>
      <option value="Madhya Kailash Temple ">Madhya Kailash Temple </option>
      <option value="Avvai Shanmugam Salai">Avvai Shanmugam Salai</option>
      <option value="Vandalur Flyover Bridge">Vandalur Flyover Bridge</option>
      <option value="Vandalur-Kelambakkam Road">Vandalur-Kelambakkam Road</option>
      <option value="Terrible traffic at Kamakshi Hospital - Pallikaranai">Terrible traffic at Kamakshi Hospital - Pallikaranai</option>
      <option value="Peerkankaranai Lake">Peerkankaranai Lake</option>
      <option value="Mugalivakkam Main Road">Mugalivakkam Main Road</option>
      <option value="Duraisamy Subway">Duraisamy Subway</option>
    </select>
    <b>End: (Safe Places)</b>
    <select id="end" onchange="calcRoute();">
      <option value="RK Mutt Road">RK Mutt Road</option>
      <option value="Cathedral Road Bus Stop">Cathedral Road Bus Stop</option>
      <option value="ThillaiGanga Nagar Subway">ThillaiGanga Nagar Subway</option>
      <option value="Gopalapuram, Chennai, Tamil Nadu">Gopalapuram, Chennai</option>
      <option value="Spur Tank Road">Spur Tank Road</option>
      <option value="Nelson Manickam Road">Nelson Manickam Road</option>
      <option value="Madambakkam Main Road">Madambakkam Main Road</option>
      <option value="GK Moopanar Flyover">GK Moopanar Flyover</option>
    </select>
    </div>
    <div id="map"></div>
    
';  

        
?>  
      <!--Import jQuery before materialize.js-->
          <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 13.0827, lng: 80.2707}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
          if (status === google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKcTiI4ItHDJreNItMYRPQXWAaBVGY6O4&signed_in=true&callback=initMap"
              async defer></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html> 

 