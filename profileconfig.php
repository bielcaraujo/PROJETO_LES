<?php session_start();?>
<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>
<?php require_once OUTPUTDATA?>
<?php
//echo $nomeUser . $enderecoUser . $emailUser . $cepUser . $userGender . $userTelefone;?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Configurações</title>
    <style>
        body,h1,h5 {font-family: "Raleway", sans-serif}
        body, html {height: 100%}
        .bgimg {
            background-color: white;
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
    </style>
    </head>
    <body>
        <?php include(HEADER_TEMPLATE); ?>
        <div class="w3-display-container w3-purple w3-mobile" style="height:70%;">
                <div class="w3-display-topmiddle">
                <table>
                    <tr>
                        <th>Informações da conta:</th>
                    </tr>
                    <tr>
                        <th><?php echo 'Nome: ' . $nomeUser ?></th>
                    </tr>
                    <tr>
                        <th><?php echo 'Login: ' . $login ?></th>
                    </tr>
                    <tr>
                        <th><?php echo 'Senha: *******'?></th>
                    </tr>
                    <tr>
                        <th><?php echo 'Endereço: ' . $enderecoUser ?></th>
                    </tr>
                    <tr>
                        <th><?php echo 'E-mail: ' . $emailUser ?></th>
                    </tr>
                    <tr>
                        <th><?php echo 'Cep: ' . $cepUser ?></th>
                    </tr>
                    <tr>
                        <th><?php echo 'Genero:' . $userGender ?></th>
                    </tr>
                    <tr>
                        <th><?php echo 'Telefone: ' . $userTelefone ?></th>
                    </tr>
                </table>
                </div>
            </div>
            <div class="w3-row w3-center">
                    <div class="w3-half">
                    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-yellow w3-round-xxlarge">MODIFICAR</button></p>
                    </div> 
                    <div class="w3-half">
                    <form method="post" action="deletar.php">
                    <p><button class="w3-button w3-red w3-round-xxlarge w3-margin" style="width:50%" type="submit">DELETAR CONTA</button></p>
                    </form>
                    </div>
            </div>
        <div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-yellow">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Modificar conta</h1>
    </div>
    <div class="w3-center w3-card-4 w3-padding-16">
       
      <p>Faça a mudança desejada aqui.</p>
      <div class="w3-row">
      <form method="post" action="modificar.php">
          <div class="w3-half w3-text-yellow">
              <h4 class="w3-left"><b>Nome:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-yellow w3-round-xxlarge" style="width:90%" name="nome" type="text" value="<?php echo $nomeUser;  ?>" placeholder="Insira seu nome aqui">
          </div>
          <div class="w3-half w3-text-yellow">
              <h4 class="w3-left"><b>E-mail:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-yellow w3-round-xxlarge" style="width:90%" name="email" type="email" value="<?php echo $emailUser   ?>" placeholder="Insira seu e-mail aqui">
          </div>
          <div class="w3-half w3-text-yellow">
              <h4 class="w3-left"><b>Senha:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-yellow w3-round-xxlarge" style="width:90%" name="password" type="password" value="<?php echo $senha  ?>" placeholder="Insira sua senha aqui">
          </div>
          <div class="w3-half w3-text-yellow">
              <h4 class="w3-left"><b>Gênero:</b></h4>
              <select class="w3-select w3-left w3-padding-16 w3-border w3-border-yellow w3-round-xxlarge" required="" style="width:90%" name="gender">
              <option value="" disabled selected>Escolha seu gênero</option>
              <option value="masc">Masculino</option>
              <option value="fem">Feminino</option>
              <option value="outr">Outro</option>
              </select>
          </div>
          <div class="w3-half w3-text-yellow">
              <h4 class="w3-left"><b>CEP:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-yellow w3-round-xxlarge" style="width:95%" name="cep" type="text" value="<?php echo $cepUser  ?>" placeholder="Insira seu CEP aqui">
          </div>
          <div class="w3-half w3-text-yellow">
              <h4 class="w3-left"><b>Endereço:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-yellow w3-round-xxlarge" style="width:90%" name="enderecotxt" type="text" value="<?php echo $enderecoUser  ?>" placeholder="Insira seu endereço aqui">
          </div>
          <div class="w3-half w3-text-yellow">
              <h4 class="w3-left"><b>Telefone:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-yellow w3-round-xxlarge" style="width:90%" name="tel" type="text" value="<?php echo $userTelefone  ?>" placeholder="Insira seu telefone aqui">
          </div>
          </div>
          <div class="w3-center w3-padding-16"><button class="w3-button w3-yellow w3-round-xxlarge" style="width:50%" type="submit">Modificar</button></div>
      </form>
    </div>
  </div>
</div>
    </body>
</html>
    
