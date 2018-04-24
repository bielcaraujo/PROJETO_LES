<?php
$loginUser = $senhaUser = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $loginUser = test_input($_POST["username"]);
  $senhaUser = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


