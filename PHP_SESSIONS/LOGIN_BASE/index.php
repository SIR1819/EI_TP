<?php
session_start();

// se sessao ativa com login
if(isset($_SESSION['user'])) {
    header("location:content1.php");
    exit();
}

if (isset($_SESSION['erro'])) {
    $erro = $_SESSION['erro'];
    unset($_SESSION['erro']);
}
//senao
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($erro)) {
    echo "<div class='erro'>".$erro."</div>";
}
?>
<form action="login.php" method="post">
    <input required="required" minlength=3 maxlength=5 type="text" name="username" id="iusername">
    <input required="required" minlength=3 maxlength=5 type="password" name="password" id="ipassword">
    <input type="submit" value="Login">
    <input type="reset" value="Limpar">
</form>
    
</body>
</html>