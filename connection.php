<?php

$servername = "localhost";
$username = "publishing_admin";
$password = "Publishing1";
$db = "publishing_db";

$con = mysqli_connect($servername, $username, $password, $db);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>