<!DOCTYPE html>
<html>
  <head>
    <?php require('meta.php'); ?>
    <title>Mapa - Wirtualne Powiaty</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #map-canvas {
        margin-top: 50px;
      }
    </style>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(51.300891, 22.882118);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var kmlLayer = new google.maps.KmlLayer({
    url: 'http://www.wirtualnepowiaty.pl/mapa.kml',
    suppressInfoWindows: false,
    map: map
  });

  google.maps.event.addListener(kmlLayer, 'click', function(kmlEvent) {
    var text = kmlEvent.featureData.description;
    showInContentWindow(text);
  });

  function showInContentWindow(text) {
    var sidediv = document.getElementById('content-window');
    sidediv.innerHTML = text;
  }
}

google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <?php require('navbar.php');?>
    <div id="map-canvas" style="width:100%; height:100%; float:left"></div>
    <div id="content-window" style="width:19%; height:100%; float:left"></div>
  </body>
</html>