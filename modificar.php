<?php session_start();?>
<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>
<?php require_once OUTPUTDATA?>
<?php require_once TRATAMENTOMODIFICAPI?>
<?php
$conn = open_database();
$count = 0;
if ($nomeUser != $name) {
    $sqlUpdate = "UPDATE tb_user SET nome_user='$name' WHERE login_user='$login'";
    $conn->query($sqlUpdate);
    $count++;
} if ($senha != $senhaUser) {
    $sqlUpdate = "UPDATE tb_user SET senha_user='$senhaUser' WHERE login_user='$login'";
    $conn->query($sqlUpdate);
    $count++;
} if ($emailUser != $email) {
    $sqlUpdate = "UPDATE tb_user SET email_user='$email' WHERE login_user='$login'";
    $conn->query($sqlUpdate);
    $count++;
} if ($userGender != $gender) {
    $sqlUpdate = "UPDATE tb_user SET user_gender='$gender' WHERE login_user='$login'";
    $conn->query($sqlUpdate);
    $count++;
} if ($cepUser != $cep) {
    $sqlUpdate = "UPDATE tb_user SET cep_user='$cep' WHERE login_user='$login'";
    $conn->query($sqlUpdate);
    $count++;
} if ($enderecoUser != $endereco) {
    $sqlUpdate = "UPDATE tb_user SET endereco_user='$endereco' WHERE login_user='$login'";
    $conn->query($sqlUpdate);
    $count++;
} if ($userTelefone != $tel) {
    $sqlUpdate = "UPDATE tb_user SET user_telefone='$tel' WHERE login_user='$login'";
    $conn->query($sqlUpdate);
    $count++;
}
if ($count != 0) {
    $_SESSION["error_message"] = "Mudanças feitas com sucesso!";
    $_SESSION["error_color"] = "green";
    header("location: index.php");
} else {
    header("location: home.php");
}

