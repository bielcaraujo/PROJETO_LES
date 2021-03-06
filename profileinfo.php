<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Configurações</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Gameet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Usuario</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Informações da conta
				</span>
                    <table class="table">
                    <tr>
                        <th scope="col">Nome: </th>
                        <th scope="col"> dummy</th>
                    </tr>
                    <tr>
                        <th scope="col">Login: </th>
                        <th scope="col"> dummy</th>
                    </tr>
                    <tr>
                        <th scope="col">Senha:</th>
                        <th scope="col"> dummy</th>
                    </tr>
                    <tr>
                        <th scope="col">idade: </th>
                        <th scope="col"> dummy</th>
                    </tr>
                    <tr>
                        <th scope="col">E-mail: </th>
                        <th scope="col"> dummy</th>
                    </tr>
                    <tr>
                        <th scope="col">estado: </th>
                        <th scope="col"> dummy</th>
                    </tr>
                    <tr>
                        <th scope="col">Genero: </th>
                        <th scope="col"> dummy</th>
                    </tr>
                    <tr>
                        <th scope="col">cidade: </th>
                        <th scope="col"> dummy</th>
                    </tr>
                        <tr>
                        <th scope="col">Descrição: </th>
                        <th scope="col"> dummy</th>
                    </tr>
                </table>
        <form>
        <div class="container-contact100-form-btn">
					<button class="contact100-form-btn" data-toggle="modal" data-target="#ModalEditar">
						<span>
							Editar
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
        </div>
            <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Deletar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
        </div>
        </form>
        </br>
        <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Jogos da conta
				</span>
                    <table class="table">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col"> Plataforma</th>
                        <th scope="col"> Tipo de jogador</th>
                        <th scope="col"> Conhecimento</th>
                        <th scope="col"> Editar </th>    
                        <th scope="col"> Deletar </th>
                    </tr>
                    <tr>
                        <th scope="col">Dummy</th>
                        <th scope="col">Dummy</th> 
                        <th scope="col">Dummy</th>
                        <th scope="col">Dummy</th>
                        <th scope="col"> 
                            <button class="contact100-form-btn" onclick="window.location.href = 'https://gameet.000webhostapp.com/profileinfo.php'";>
                                <span>
                                    Editar    
                                    <i class="fa fa-long-arrow-right m-l-7"  aria-hidden="true"></i>
                                </span>
					       </button></th>
                        <th scope="col"> 
                                        <button class="contact100-form-btn">
                                            <span>
                                                Deletar
                                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                            </span>
                                        </button></th>
                    </tr>        
                </table>
    
        </form>
            <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Adicionar um novo jogo
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
    </div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
