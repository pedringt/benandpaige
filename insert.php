<?php

require_once 'login.php';

##Connect to host
$db_server = mysql_connect($db_hostname, $db_username, $db_password)
or die("Unable to connect to MySQL: " . mysql_error());

##Select RSVP database
mysql_select_db($db_database, $db_server)
or die("Unable to select database: " . mysql_error());

##Store info from rsvp.php
$name = $_POST['name'];
$number = $_POST['number'];
$food = $_POST['food'];

##Insert variables into guests table
$sql="INSERT INTO guests (name, number, food)
VALUES ('$name', '$number', '$food')";
$result = mysql_query($sql);

##Message that informs whether or not entry was successful
if (!$result) {
  die('Error: ' . mysqli_error($db_server));
}
echo "1 record added";
echo "$name, $number, $food";

##Close connection
mysqli_close($db_server);

?>
