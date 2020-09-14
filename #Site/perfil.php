<?php
require_once "php/config.php";
expulsaVisitante();
expulsaAdm();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Locastyle CSS -->
      <!-- <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/edge/stylesheets/locastyle.css"> -->

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <!-- Link Font-Awesome -->
      <script src="https://kit.fontawesome.com/635b72a438.js" crossorigin="anonymous"></script>

      <!-- Link CSS -->
      <link rel="stylesheet" href="css/estilo.css">

      <title>Portal Fênix</title>
</head>

<!-- data-spy="scroll" data-target="#nav-cabecalho" data-offset="50" -> no body, serve para fazer com que o item ativo na navbar seja marcado por meio do scroll -->

<body id="perfil-adm" class="perfil">

      <!-- Inicio Cabeçalho-->
      <header>
            <!-- Início Nav -->
            <nav class="py-3 navbar navbar-expand-lg navbar-dark bg-base fixed-top">
                  <div class="container">

                        <!-- Logo -->
                        <a href="index.html" class="navbar-brand">
                              <h2 class="logo">Portal Fênix</h1>
                                    <span class="sr-only">Portal Fênix</span>
                        </a>

                        <!-- Botão para menu-expandido -->
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-cabecalho">
                              <i class="fa fa-bars fa-lg fa-white" aria-hidden="true"></i>
                        </button>

                        <!-- Lista nav-menu-->
                        <div id="nav-cabecalho" class="collapse navbar-collapse">
                              <ul class="nav navbar-nav ml-auto">

                                    <li class="nav-item">
                                          <a class="nav-link" href="index.php#topo-container"> <i class="fa fa-home mr-1" aria-hidden="true"></i> Home</a>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="index.php#historia-container"> <i class="fa fa-book mr-1" aria-hidden="true"></i> História</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="index.php#edicoes-container"> <i class="fa fa-bookmark mr-2" aria-hidden="true"></i> Edições</a>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="index.php#sobre-container"> <i class="fa fa-address-card mr-1" aria-hidden="true"></i> Sobre</a>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="index.php#localizacao-contato-container"><i class="fa fa-phone mr-2"></i> Contato</a>
                                    </li>

                                    <!-- Divisor -->
                                    <li class="nav-item divisor d-none d-lg-inline-block"></li>

                                    <!-- Divisor quando é menu expandido-->
                                    <li class="nav-item">
                                          <hr class="bg-light d-lg-none">
                                    </li>

                                    <!-- Personalizado -->
                                    <li class="nav-item">
                                          <a class="nav-link nav-pointer mr-0" data-toggle="modal" data-target="#modal-confirmar-sair"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i> Sair</a>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link active" href="perfilAdm.php"> <i class="d-inline-block d-lg-none fa fa-user-circle mr-2" aria-hidden="true"></i> <i class="d-none d-lg-inline-block fa fa-user-circle fa-lg " aria-hidden="true"></i><span class="d-lg-none d-inline d-inline-login">Perfil</span></a>
                                          <p class="sr-only">Perfil</p>
                                    </li>
                              </ul>
                        </div>
                  </div>
            </nav>
            <!-- /Fim Nav -->'

      </header>
      <!-- /Fim Cabeçalho-->

      <!-- Início section Bem-vindo -->
      <section id="bem-vindo" class="d-flex box-shadow-titulo">
            <div class="container-fluid">
                  <h1 class="display-4 d-inline-block text-cor h1-ajuste-tamanho h1-ajuste-altura"><?php SaudacaoHoraDoDia(); ?></h1>
      </section>

      <!-- MODAIS -->
      <div>
            <!-- Modal do botão sair -->
            <!-- Modal -->
            <div class="modal fade" id="modal-confirmar-sair" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                          Tem certeza que deseja sair?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true"><i class="fa fa-window-close text-dark"></i></span>
                                    </button>
                              </div>
                              <div class="modal-body">
                                    Ao clicar em <strong>"Sair"</strong>
                                    você será redirecionado para a página principal e será deslogado.
                                    Tem certeza que deseja fazer isso?
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-cancelar" data-dismiss="modal">Cancelar</button>
                                    <button type="reset" class="btn btn-confirmar" onclick="location.href='php/sair.php'">Sair</button>
                              </div>
                        </div>
                  </div>
            </div>
      </div>


      <!-- Optional JavaScript -->
      <div>
            <!-- CDN Jquery -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
            </script>

            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>

            <!--Engine de localização-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
            </script>

            <!-- Importando Jquery Mask -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

            <!-- Locastyle JS-->
            <script src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>

            <!-- Manter links de JavaScript abaixo do CDN Jquery -->
            <!-- Link main.js -->
            <script src="script/main.js"></script>
      </div>
</body>

</html>
