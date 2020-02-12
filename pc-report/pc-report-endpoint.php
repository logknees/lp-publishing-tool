<?php

include '../connection.php';
include '../utf8ize.php';

$JSON = $_POST['send_object'];
$JSON = json_decode($JSON,true);

$pc = $JSON['pc'];
$start_date = $JSON['start_date'];
$end_date = $JSON['end_date'];

$mysqli = $con->prepare("SELECT count('a.id') as created_count FROM sites a WHERE a.created_on > '$start_date' AND a.created_on < '$end_date' AND a.publishing_coordinator = '$pc'");
$mysqli->execute();
$array = array();
$result = $mysqli->get_result()->fetch_assoc();
$response['created_count'] = $result['created_count'];

$mysqli = $con->prepare("SELECT count('a.id') as emailed_count FROM sites a WHERE a.last_poc > '$start_date' AND a.last_poc < '$end_date' AND a.publishing_coordinator = '$pc'");
$mysqli->execute();
$array = array();
$result = $mysqli->get_result()->fetch_assoc();
$response['emailed_count'] = $result['emailed_count'];


echo json_encode($response);

?>