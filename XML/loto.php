<?php

$numeros = array(1,2,3,4,5);
$estrelas = array(1,2);


$chaveXML = new simpleXMLElement("<chave/>");

$numerosXML = $chaveXML->addChild("numeros");
$estrelasXML = $chaveXML->addChild("estrelas");

foreach ($numeros as $numero) {
    $numerosXML->addChild("num",$numero);
}

foreach ($estrelas as $numero) {
    $estrelasXML->addChild("num",$numero);
}
header("Content-Type: application/xml");
echo $chaveXML->asXML();
?>