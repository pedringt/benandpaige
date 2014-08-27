<?php

require_once 'login.php';

$db_server = mysql_connect($db_hostname, $db_username, $db_password)
or die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database, $db_server)
or die("Unable to select database: " . mysql_error());

$name = $_POST['guestname'];
$number = $_POST['guestnumber'];
$food = $_POST['guestfood'];

$sql="INSERT INTO guests (name, number, food)
VALUES ('$name', '$number', '$food')";
$result = mysql_query($sql);

if (!$result) {
  die('Error: ' . mysqli_error($db_server));
}
echo "1 record added";

mysqli_close($db_server);

?>
