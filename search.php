<?php

include 'connection.php';
include 'utf8ize.php';

$JSON = $_POST['send_object'];
$JSON = json_decode($JSON,true);

$website = $JSON["website"];
$names = $JSON["names"];
$email = $JSON["email"];
$phone = $JSON["phone"];

$mysqli = $con->prepare("SELECT * FROM sites WHERE website LIKE '%$website%' AND names LIKE '%$names%' AND email LIKE '%$email%' AND phone LIKE '%$phone%';");

$mysqli->execute();
$array = array();
$result = $mysqli->get_result();
while($row = $result->fetch_assoc()){
	foreach($row as $value){
		$value = utf8_encode($value);
	}
	$array[] = $row;
}

echo json_encode(utf8ize($array));

?>