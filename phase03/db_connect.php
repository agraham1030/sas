<?php
$dbhost = 'localhost';
$dbuser = 'sally';
$dbpass = 'P@ssword1234';
$dbname = 'salamanders';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_close($connection);
?>