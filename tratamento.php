<?php
include('DBconnec.php');
$name = $loginUser = $senhaUser = $senhaUser2 = $email = $gender = $cep = $tel = $endereco = "";
 $endereco = $_POST['enderecotxt'] . ', ' . $_POST['endereconum'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nome"]);
  $loginUser = test_input($_POST["username2"]);
  $senhaUser = test_input($_POST["password"]);
  $senhaUser2 = test_input($_POST["password_repeat"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $cep = test_input($_POST["cep"]);
  $tel = test_input($_POST["tel"]);
  $endereco = test_input($endereco);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

