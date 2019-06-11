<?php 

include 'connection.php';
include 'utf8ize.php';

$JSON = $_POST['edit_submit_obj'];
$id = $_POST['id'];
$JSON = json_decode($JSON,true);

$keys = array();
$values = array();

foreach($JSON as $key => $value){
	//echo "key = ", $key, " : value = ", $value, "\n";
	$keys[] = $key;
	if($key == "DA" || $key == "active" || $key == "is_signed" || $key == "publishing_coordinator"){
		if($value == ''){
			$values[] = 0;
		}
		else{
			$values[] = $value;
		}
	}
	elseif($key == "last_poc"){
		if($value == '0000-00-00'){
			$values[] = '0000-01-01';
		}
		else{
			$values[] = $value;
		}
	}
	else{
		$values[] = $value;
	}
}

//$key_string = implode(",", $keys);
//$value_string = implode(",", $values);
/*
echo "UPDATE SITES SET ";
for($i = 0; $i < count($keys); $i++){
	echo $keys[$i], " = ", $values[$i], ", ";
}
//echo $id;*/
$mysqli = $con->prepare("UPDATE sites SET $keys[0]='$values[0]',$keys[1]=$values[1],$keys[2]='$values[2]',$keys[3]='$values[3]',$keys[4]='$values[4]',$keys[5]='$values[5]',$keys[6]='$values[6]',$keys[7]='$values[7]',$keys[8]='$values[8]',$keys[9]=$values[9],$keys[10]=$values[10], $keys[10]='$values[10]' WHERE website_id = $id;");
//$mysqli = $con->prepare("INSERT INTO sites ($key_string) VALUES ($value_string);");

if ($mysqli->execute()) { 
   echo "Success!";
} else {
   echo "Fail!";
}

?>


