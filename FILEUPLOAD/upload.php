<?php

//var_dump($_FILES);

// verificar o erro

if ($_FILES['up']['error']) {
    exit("erro de upload");
}

// verificar o tamanho
if ($_FILES['up']['size'] > 4000000) {
    exit("demasido grande");
}

echo $_FILES['up']['type'];
echo mime_content_type($_FILES['up']['tmp_name']);

// verificar mime type
if (mime_content_type($_FILES['up']['tmp_name']) !== "application/pdf") {
    exit("não é PDF");
}




$basePath = "uploads/";
$filePath = $_FILES['up']['name'];
$targetPath = $basePath . $filePath;

if (file_exists($targetPath)) {
    exit("ficheiro ja existe");
}
if (!move_uploaded_file($_FILES['up']['tmp_name'],$targetPath)) {
    exit ("erro ao escrever");
}


?>