<?php
$name = $senhaUser = $email = $gender = $cep = $tel = $endereco = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nome"]);
  $senhaUser = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $cep = test_input($_POST["cep"]);
  $tel = test_input($_POST["tel"]);
  $endereco = test_input($_POST["enderecotxt"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

