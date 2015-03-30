<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title> 
  <link href="/stylesheets/wedding.css" rel="stylesheet">
  <link href="/stylesheets/rsvpform.css" rel="stylesheet">
  <link rel="icon" href="../favicon.ico" type="image/x-icon"/>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(39.16533, -86.52639),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>

<?php include "menu.php"; ?>

<div id="main">