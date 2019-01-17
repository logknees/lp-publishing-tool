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

/*
$clause = 'LIKE';
$mod = '%';

//switch out the "LIKE" SQL clause for = for certain requests, also switch out modulus
if($searchField == 'DA'){
	$clause = '=';
	$mod = '';
}


$mysqli = $con->prepare("SELECT * FROM sites WHERE ".$searchField." ".$clause." '".$mod."".$searchData."".$mod."' ORDER BY ".$sortData." ".$sortOrder." ");
*/
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