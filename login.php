<?php session_start();?>
<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>
<?php require_once TRATAMENTOLOGINAPI?>
<?php $_SESSION["error_message"] = "";?>
<?php
$conn = open_database();

$sqlQuery = "SELECT * FROM tb_user WHERE login_user= '$loginUser' and senha_user= '$senhaUser'";
$result = $conn->query($sqlQuery);

if($result->num_rows > 0) {
 $_SESSION['login'] = $loginUser;
$_SESSION['senha'] = $senhaUser;
header('location:home.php');
}else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    $_SESSION["error_message"] = "Login ou senha inválidos";
    header('location:index.php');
}

 
?>

