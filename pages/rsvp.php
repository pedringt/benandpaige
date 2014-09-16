<!DOCTYPE html>
<html>
<head>
  <title>rsvp</title>
  <link href="/stylesheets/wedding.css" rel="stylesheet">
</head>

<body>

<?php include "../included/header.php"; ?>
<div id="main">

<h1>rsvp</h1> 
<p>rsvp here</p>

<form action="/included/insert.php" method="post">
Name: <input type="text" name="name"><br>
Number of guests attending: <input type="text" name="number"><br>
Dietary restrictions: <input type="text" name="food"><br>
<input type="submit">
</form>

</div>

</body>

</html>
