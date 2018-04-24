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
        <div class="w3-display-container w3-mobile w3-text-purple" style="height:70%;">
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
                    <form method="post" action="modificar.php">
                    <p><button class="w3-button w3-yellow w3-round-xxlarge w3-margin" style="width:50%" type="submit">MODIFICAR INFORMAÇÕES</button></p>
                    </form>
                    </div> 
                    <div class="w3-half">
                    <form method="post" action="deletar.php">
                    <p><button class="w3-button w3-red w3-round-xxlarge w3-margin" style="width:50%" type="submit">DELETAR CONTA</button></p>
                    </form>
                    </div>
            </div>
    </body>
</html>
    
