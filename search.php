<?php

include 'connection.php';
include 'utf8ize.php';

$searchField = $_POST['searchField'];
$searchData = $_POST['searchData'];
$sortData = $_POST['sortData'];
$sortOrder = $_POST['sortOrder'];

$clause = 'LIKE';
$mod = '%';

//switch out the "LIKE" SQL clause for = for certain requests, also switch out modulus
if($searchField == 'DR'){
	$clause = '=';
	$mod = '';
}


$mysqli = $con->prepare("SELECT * FROM sites WHERE ".$searchField." ".$clause." '".$mod."".$searchData."".$mod."' ORDER BY ".$sortData." ".$sortOrder." ");
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