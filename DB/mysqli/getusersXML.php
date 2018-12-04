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

// resultXML
$result = new simpleXMLElement("<users/>");

// append user objects to array
while($user = $res->fetch_object()) {
    $userNode = $result->addChild("user");
    $userNode->addChild("username",$user->username);
    $userNode->addChild("nome",$user->nome);
    $userNode->addChild("apelido",$user->apelido);
}

// output as XML
header("Content-Type:application/xml");
echo $result->asXML();
?>
