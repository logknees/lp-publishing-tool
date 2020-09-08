<?php

include 'connection.php';
include 'utf8ize.php';

$JSON = $_POST['send_object'];
$JSON = json_decode($JSON,true);

$pc_clause = "";
$date_clause = "";

$website = $JSON["website"];
$names = $JSON["names"];
$email = $JSON["email"];
$phone = $JSON["phone"];
$pc = $JSON["pc"];
$date = $JSON["date"];
$order = $JSON["order"];
$direction = $JSON["direction"];

if($pc != 0){
	$pc_clause = "AND publishing_coordinator = ".$pc."";
}
if($date != ""){
	$date_clause = "AND a.last_poc = '".$date."'";
}

$mysqli = $con->prepare("SELECT * FROM sites a LEFT JOIN publishing_coordinator AS b 
ON a.publishing_coordinator = b.pc_id 
WHERE a.website LIKE '%$website%' 
AND a.names LIKE '%$names%' 
AND a.email LIKE '%$email%' 
AND a.phone LIKE '%$phone%' 
$pc_clause 
$date_clause
ORDER BY $order $direction");
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