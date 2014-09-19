<?php

require_once '../included/login.php';

##Connect to database
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if(! $db_server )
{
  die('Could not connect: ' . mysql_error());
}

##Select RSVP database
mysql_select_db($db_database, $db_server)
or die("Unable to select database: " . mysql_error());

$sql = 'SELECT name, number, food FROM guests';
$retval = mysql_query( $sql, $db_server );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Name :{$row['name']}  <br> ".
         "Number of guests attending : {$row['number']} <br> ".
         "Dietary restrictions : {$row['food']} <br> ".
         "--------------------------------<br>";
} 


echo ";

mysql_close($db_server);

?>