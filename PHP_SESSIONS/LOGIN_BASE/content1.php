<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("location:index.php");
    exit();
} else {
    $user = $_SESSION['user'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Olá <?php echo $user;?> </h1>
    <a href="logout.php"> logout </a>

</body>
</html>