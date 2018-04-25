<?php session_start();?>
<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>
<?php
$conn = open_database();
$login = $_SESSION["login"];

$sqlDelete = "DELETE FROM tb_user WHERE login_user='$login'";

if ($conn->query($sqlDelete) == TRUE){
    $_SESSION["error_message"] = "Perfil deletado com sucesso!";
    $_SESSION["error_color"] = "green";
    header("location: index.php");
} else {
    $_SESSION["error_message"] = "Algo deu errado no Banco de Dados! Tente novamente mais tarde.";
    header("location: index.php");
}
?>

