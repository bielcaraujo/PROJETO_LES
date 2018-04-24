<?php
$conn = open_database();
$login = $_SESSION["login"];
$senha = $_SESSION["senha"];
$sqlFetch = "SELECT nome_user,endereco_user,email_user,cep_user,user_gender,user_telefone"
        . " FROM tb_user WHERE login_user = '$login'";
$result = $conn->query($sqlFetch);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$nomeUser = $row["nome_user"];
$enderecoUser = $row["endereco_user"];
$emailUser = $row["email_user"];
$cepUser = $row["cep_user"];
$userGender = $row["user_gender"];
$userTelefone = $row["user_telefone"];

}
?>
