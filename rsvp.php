<html>
<head>
  <title>rsvp</title>
  <link href="wedding.css" rel="stylesheet">
</head>

<body>

<?php include("header.php"); ?>
<div id="main">

<h1>rsvp</h1> 
<p>rsvp here</p>

<form action="insert.php" method="post">
Name: <input type="text" name="name"><br>
Number of guests attending: <input type="text" name="guests"><br>
Dietary restrictions: <input type="text" name "diet"><br>
<input type="submit">
</form>

</div>

</body>

</html>
