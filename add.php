<?php 

include 'connection.php';
include 'utf8ize.php';

$JSON = $_POST['add_submit_obj'];
$JSON = json_decode($JSON,true);

echo json_encode($JSON);















?>


