<?php
@$contador = file_get_contents("count.txt");

if ($contador === FALSE) {
    $contador = 1;
} else {
    $contador = $contador + 1;
}

file_put_contents("count.txt",$contador);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h5> página acedida <?php echo $contador; ?> vezes </h5>
</body>
</html>