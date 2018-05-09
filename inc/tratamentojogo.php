<?php
$nomejogo = $tipojogo = $plataforma = $nvconhecimento = "";
$idjogo = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$idjogo = ++$id_jogo;
$nomejogo= test_input($_POST["gamename"]);
$tipojogo = test_input($_POST["gametype"]);
$plataforma = test_input($_POST["platform"]);
$nvconhecimento = test_input($_POST["lvl"]);   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

?>

