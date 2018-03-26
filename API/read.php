<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
include_once '../config/database.php';
include_once 'user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
 
$stmt = $user->read();
$users["records"]=array();

while ( $row = mysqli_fetch_array ( $stmt ) ) {	
	extract($row);
	$user_item=array(
			"id" => $id,
			"name" => $name,
	);
	array_push($users["records"], $user_item);
}
echo json_encode($users);
?>