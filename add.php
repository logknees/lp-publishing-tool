<?php 

include 'connection.php';
include 'utf8ize.php';

$JSON = $_POST['add_submit_obj'];
$JSON = json_decode($JSON,true);

$keys = array();
$values = array();

foreach($JSON as $key => $value){
	$keys[] = $key;
	if($key == "DA" || $key == "times_contacted" || $key == "active" || $key == "signed" || $key == "publishing_coordinator"){
		if($value == ''){
			$values[] = 0;
		}
		else{
			$values[] = $value;
		}
	}
	elseif($key == "last_poc"){
		if($value == ''){
			$values[] = "null";
		}
		else{
			$values[] = $value;
		}
	}
	else{
		$values[] = "'" . $value . "'";
	}
	
}

$key_string = implode(",", $keys);
$value_string = implode(",", $values);
echo "INSERT INTO sites ($key_string) VALUES ($value_string)";

$mysqli = $con->prepare("INSERT INTO sites ($key_string) VALUES ($value_string);");

if ($mysqli->execute()) { 
   echo "Success!";
} else {
   echo "Fail!";
}

?>


