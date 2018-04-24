<?php session_start();?>
<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Home</title>
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
        <?php
        $db = open_database();
        ?>
<div class="bgimg w3-display-container w3-text-purple">
    <?php if ($_SESSION["error_message"] != "") {
          if ($_SESSION["error_color"] != "") { ?>
            <div class="w3-panel w3-green w3-display-topmiddle">
            <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <h4> Sucesso!</h4>
            <p><?php echo $_SESSION["error_message"] ?></p>
            </div>
      <?php }else {?>
            <div class="w3-panel w3-red w3-display-topmiddle">
            <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <h4> Erro!</h4>
            <p><?php echo $_SESSION["error_message"] ?></p>
            </div>
      <?php }?>
      <?php }?>
  <div class="w3-display-middle w3-jumbo">
      <h1>logo</h1>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-purple w3-round-xxlarge">login</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-purple w3-round-xxlarge">registro</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container">
      <p class="w3-xlarge"><b>Gameet!</b></p>
    <p class="w3-large">O melhor site para encontrar aquele duozinho</p>
    <p>Copyright © 2018</p>
  </div>
</div>

<!-- Login Modal -->
<div id="menu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-purple w3-display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Login </h1>
    </div>
    <div class="w3-center w3-card-4 w3-padding-16">
      <p>Acesse sua conta Gameet!<p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
          <h4 class="w3-text-purple"><b>Usuário</b></h4>
            <div class="w3-row w3-section w3-text-purple">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" name="username" type="text" placeholder="Usuário">
                </div>
            </div>
          <h4 class="w3-text-purple"><b>Senha</b></h4>
          <div class="w3-row w3-section w3-text-purple">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                <div class="w3-rest">
          <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" type="text" placeholder="Senha" required name="password">
                          </div>
            </div>
          <p><button class="w3-button w3-purple w3-round-xxlarge" style="width:50%" type="submit">LOGAR</button></p>
      </form>
    </div>
  </div>
</div>

<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-purple">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Registro</h1>
    </div>
    <div class="w3-center w3-card-4 w3-padding-16">
       
      <p>Faça seu registo Gameet aqui!</p>
      <div class="w3-row">
      <form method="post" action="insert.php">
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>Nome:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:90%" name="nome" type="text" placeholder="Insira seu nome aqui">
          </div>
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>E-mail:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:90%" name="email" type="email" placeholder="Insira seu e-mail aqui">
          </div>
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>Usuário:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:90%" name="username2" type="text" placeholder="Insira seu usuário aqui">
          </div>
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>Senha:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:90%" name="password" type="password" placeholder="Insira sua senha aqui">
          </div>
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>Gênero:</b></h4>
              <select class="w3-select w3-left w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:90%" name="gender">
              <option value="" disabled selected>Escolha seu gênero</option>
              <option value="masc">Masculino</option>
              <option value="fem">Feminino</option>
              <option value="outr">Outro</option>
              </select>
          </div>
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>Repitir senha:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:90%" name="password_repeat" type="password" placeholder="Insira sua senha novamente aqui">
          </div>
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>CEP:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:95%" name="cep" type="text" placeholder="Insira seu CEP aqui">
          </div>
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>Endereço:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:90%" name="enderecotxt" type="text" placeholder="Insira seu endereço aqui">
          </div>
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>Número:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:85%" name="endereconum" type="text" placeholder="Insira o número da sua casa aqui">
          </div>
          <div class="w3-half w3-text-purple">
              <h4 class="w3-left"><b>Telefone:</b></h4>
              <input class="w3-input w3-padding-16 w3-border w3-border-purple w3-round-xxlarge" style="width:90%" name="tel" type="text" placeholder="Insira seu telefone aqui">
          </div>
          </div>
          <div class="w3-center w3-padding-16"><button class="w3-button w3-purple w3-round-xxlarge" style="width:50%" type="submit">Registrar</button></div>
      </form>
    </div>
  </div>
</div>
    </body>
</html>
<?php $_SESSION["error_message"] = ""; $_SESSION["error_color"] = ""; ?>
