<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gameet é game e meet não gay e meat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">GAMEET</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Login/Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Grupo</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Bem vindo ao gameet!</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">O site com o objetivo de juntar jogadores para raids, grupos e até encontros IRL, encontre pessoas proximas de você com interesses similares e divirta-se!</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Comece agora!</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Encontre pesssoas agora!</h2>
              <div><img src="img/logo.png"></div>
            <hr class="light my-4">
            <p class="text-faded mb-4">O gameet é uma ferramenta feita para jogadores dos mais diversos tipos encontrarem um grupo ideal para jogar! encontre pessoas ao seu redor e divirta-se com quem você menos imaginava!</p>
              <button class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#ModalCadastro">Cadastro</button>
              <button class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#ModalLogin">Login</button>
              <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="TitleLogin">login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                            <form>
                                  <h4><b>Usuário</b></h4>
                                    <div class="form-group">
                                        <input class="form-control" id="form-inicio-login-user" name="login" type="text" placeholder="Usuário">
                                    </div>
                                  <h4><b>Senha</b></h4>
                                  <div>
                                  <input class="form-control" id="form-inicio-login-senha" type="senha" placeholder="Senha" required name="password">
                                  </div>
                            </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>
                        <button type="button"  onclick="login()" class="btn btn-primary">Entrar</button>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="modal fade" id="ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                              <div class="row">
                              <div class="col">
                                  <h4><b>Nome:</b></h4>
                                  <input class="form-control" id="form-cadastro-usuario-nome" name="nome" type="text" placeholder="Insira seu nome aqui">
                              </div>
                              <div class="col">
                                  <h4><b>Idade:</b></h4>
                                  <input class="form-control" id="form-cadastro-usuario-idade" name="idade" type="number" placeholder="Insira sua idade aqui">
                              </div>
                              </div>      
                              <div class="row">
                              <div class="col">
                                  <h4><b>Usuário:</b></h4>
                                  <input class="form-control" class="form-control" id="form-cadastro-usuario-username" name="username2" type="text" placeholder="Insira seu usuário aqui">
                              </div>
                              <div class="col">
                                  <h4><b>Senha:</b></h4>
                                  <input class="form-control" name="password" id="form-cadastro-usuario-senha" type="password" placeholder="Insira sua senha aqui">
                              </div>
                              </div>      
                              <div class="row">
                              <div class="col">
                                  <h4 ><b>Estado:</b></h4>
                                  <select class="form-control" id="form-cadastro-usuario-estado" name="estados-brasil">
                                                            <option value="AC">Acre</option>
                                                            <option value="AL">Alagoas</option>
                                                            <option value="AP">Amapá</option>
                                                            <option value="AM">Amazonas</option>
                                                            <option value="BA">Bahia</option>
                                                            <option value="CE">Ceará</option>
                                                            <option value="DF">Distrito Federal</option>
                                                            <option value="ES">Espírito Santo</option>
                                                            <option value="GO">Goiás</option>
                                                            <option value="MA">Maranhão</option>
                                                            <option value="MT">Mato Grosso</option>
                                                            <option value="MS">Mato Grosso do Sul</option>
                                                            <option value="MG">Minas Gerais</option>
                                                            <option value="PA">Pará</option>
                                                            <option value="PB">Paraíba</option>
                                                            <option value="PR">Paraná</option>
                                                            <option value="PE">Pernambuco</option>
                                                            <option value="PI">Piauí</option>
                                                            <option value="RJ">Rio de Janeiro</option>
                                                            <option value="RN">Rio Grande do Norte</option>
                                                            <option value="RS">Rio Grande do Sul</option>
                                                            <option value="RO">Rondônia</option>
                                                            <option value="RR">Roraima</option>
                                                            <option value="SC">Santa Catarina</option>
                                                            <option value="SP">São Paulo</option>
                                                            <option value="SE">Sergipe</option>
                                                            <option value="TO">Tocantins</option>
                                        </select>
                              </div>
                              <div class="col">
                                  <h4 ><b>Gênero:</b></h4>
                                  <select class="form-control" id="form-cadastro-usuario-genero" name="gender">
                                  <option value="" disabled selected>Escolha seu gênero</option>
                                  <option value="masc">Masculino</option>
                                  <option value="fem">Feminino</option>
                                  <option value="outr">Outro</option>
                                  </select>
                              </div>
                              </div>
                              <div class="row">
                              <div  class="col">
                                  <h4 ><b>cidade:</b></h4>
                                  <input class="form-control" name="cidade" id="form-cadastro-usuario-cidade" type="text" placeholder="Insira sua cidade aqui">
                                  </br>
                              </div>
                                 
                         </div>   
                          <div class="col">
                          <button type="button" style="width:60%" class="btn btn-secondary" data-dismiss="modal">fechar</button>
                          </div>
                          </br>
                          <div class="col">      
                          <button type="button" onclick="cadastroUsuario()" style="width:60%" class="btn btn-primary">Cadastrar-se</button>
                          </div>      
                          </div>      
                          </form>
                      </div>
                    </div>
                  </div>
                </div>              
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Sobre o grupo</h2>
            <hr class="my-4">
              <p class="mb-5">Back-end:  João Sebastian</br>
            Front-end: Danilo Pelozone Lima </br>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>13-98221-3285</p>
            <p>13-99754-0139</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:danilo.pelozone@gmail.com">danilo.pelozone@gmail.com</a>
              <a href="mailto:joaovsebastian@hotmail.com">joaovsebastian@hotmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
