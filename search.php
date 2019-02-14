<?php

include 'connection.php';
include 'utf8ize.php';

$JSON = $_POST['send_object'];
$JSON = json_decode($JSON,true);

$website = $JSON["website"];
$names = $JSON["names"];
$email = $JSON["email"];
$phone = $JSON["phone"];
$order = $JSON["order"];
$direction = $JSON["direction"];

$mysqli = $con->prepare("SELECT * FROM sites a LEFT JOIN publishing_coordinator AS b ON a.publishing_coordinator = b.pc_id WHERE a.website LIKE '%$website%' AND a.names LIKE '%$names%' AND a.email LIKE '%$email%' AND a.phone LIKE '%$phone%' ORDER BY $order $direction");

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