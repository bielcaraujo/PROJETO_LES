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
<div class="bgimg w3-display-container w3-text-red">
  <div class="w3-display-middle w3-jumbo">
      <img src="/PROJETO_LES/res/img/logo.jpg" alt="logo">
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-red">login</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-red">registro</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container">
      <p class="w3-xlarge"><b>Gameet!</b></p>
    <p class="w3-large">O melhor site para encontrar aquele duozinho</p>
    <p>Copyright © 2018</p>
  </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-red w3-display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Login </h1>
    </div>
    <div class="w3-container">
      <h5>Form de login aqui</h5>
    </div>
  </div>
</div>

<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-red">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Registro</h1>
    </div>
    <div class="w3-container">
      <p>Form de registro aqui</p>
      <form action="/action_page.php" target="_blank">
      </form>
    </div>
  </div>
</div>

    </body>
</html>
