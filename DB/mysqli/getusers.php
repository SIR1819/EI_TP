<?php 
require_once("CConnect.php");

// get a (new or existing) instance
$DB = Database::getInstance();

// connection
$conn = $DB->getConnection();

//sql
$sql = "SELECT username, nome, apelido FROM users";

// query
$res = $conn->query($sql);

// result
$resultData = Array();

// append user objects to array
while($user = $res->fetch_object()) {
    $resultData[] = $user;
}

// convert array to json
header("Content-Type:application/json");
echo json_encode($resultData);

?>
