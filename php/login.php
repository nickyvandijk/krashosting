<?php
// Create connection

$dbhost = 'localhost';
$dbname = 'dimensio';
$dbuser = 'dimadmin';
$dbpass = 'Welkom01';


$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
	
	// login checks
	// session variables blah blah
	echo 'hello world';
	}
?>