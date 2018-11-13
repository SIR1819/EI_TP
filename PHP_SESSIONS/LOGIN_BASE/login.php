<?php
// Simular uma BD de users
$USERS = array();
$USERS['rui'] = "111";
$USERS['pedro'] = "222";
$USERS['ana'] = "333";

session_start();

if (isset($_SESSION['user'])) {
    header("location:index.php");
    exit();
} else if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("location:index.php");
    exit();
} else if (!isset($USERS[$_POST['username']])) {
    $_SESSION['erro'] = "utilizador não existente";
    header("location:index.php");
    exit();
} else if ($USERS[$_POST['username']] !== $_POST['password']) {
    $_SESSION['erro'] = "utilizador e password não conferem";
    header("location:index.php");
    exit();
} else {
    $_SESSION['user'] = $_POST['username'];
    header("location:index.php");
    exit();
}

?>