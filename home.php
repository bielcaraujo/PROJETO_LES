<?php
    session_start();
    $logado = $_SESSION['login'];
?>
<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>
<!DOCTYPE html>
<html>
<head>  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>  
</head>
<body>
<?php include(HEADER_TEMPLATE); ?>
<div class="w3-row">
  <div class="w3-col s3 w3-center w3-purple"><img style="width: 40%;" src="nah.png">
      </br>
    <div class="w3-panel w3-white">
  <h3 class="w3-opacity">
  <b>Nome: <?php echo $logado;?></b></h3>
  <h4 class="w3-opacity"><b>3000 anos</b></h4></b>
  <h5>Jogos:</h5>
  <h6>league of legends</h6>
  <h6>overwatch</h6>
  <h6>tristeza online</h6>
  </div>
  </div>
      
  <div class="w3-col s9 w3-center">
   <div class="w3-card-4 w3-white" style="width:30%" style="padding:10px">

    <div class="w3-container w3-center">
      <h3>Friend Request</h3>
      <img src="nah2.png" alt="Avatar" style="width:50%">
      <h5>Robin</h5>

      <div class="w3-section">
        <button class="w3-button w3-green">Accept</button>
        <button class="w3-button w3-red">Decline</button>
      </div>
    </div>

  </div>
    
  </div>
</div>
</body>
</html>