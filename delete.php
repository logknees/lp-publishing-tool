<?php 

include 'connection.php';


$id = $_POST['id'];

$mysqli = $con->prepare("DELETE FROM sites  WHERE website_id = $id");

if ($mysqli->execute()) { 
   echo "Success!";
} else {
   echo "Fail!";
}

?>


