<?php
require_once "php/config.php";

expulsaVisitante();
expulsaUsuario();

// Update

require_once "php/crud/select.php";

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
            <div class="container">
                  <div class="row">
                        <div class="col-sm-8">
                              <h1 class="display-4 d-inline-block text-cor h1-ajuste-tamanho h1-ajuste-altura"><?php SaudacaoHoraDoDia(); ?></h1>
                        </div>
                        <div class="offset-sm-1 col-sm-2 align-self-center text-right">
                              <i class="fa fa-feather-alt fa-3x d-none d-md-block fa-blue sombra" aria-hidden="true"></i>
                              <i class="fa fa-feather-alt fa-3x d-sm-block d-none d-md-none fa-blue sombra" aria-hidden="true"></i>
                        </div>
                  </div>
            </div>
            <!-- Fim Section Bem-vindo -->
      </section>

      <!-- Início section principal -->
      <section id="container-principal" class="d-flex box-shadow-titulo pb-4">
            <div class="container">

                  <!-- Inicio lista de botoes -->
                  <div class="accordion" id="accordion-controler">
                        <div class="accordion" id="accordion-controler-cards">
                              <!-- <div class="row align-items-center">  <---------AQUI OS ELENTOS CENTRALIZAM DE ACORDO COM OS COLLAPSES    -->
                              <div class="row">
                                    <div class="col-md-3">
                                          <li class=" remove-estilo-lista">


                                                <!-- Inicio submenu informações pessoais -->
                                                <div class="listador">
                                                      <a class="controlador a-perfil-informacao" type="button" id="btn-lista-informacoes-pessoais" data-toggle="collapse" href="#collapse-informacoes-pessoais-perfil" aria-expanded="false" aria-controls="collapse-informacoes-pessoais"><i class="fa fa-user" aria-hidden="true"></i> Informações pessoais</a>
                                                </div>
                                                <!-- Fim submenu informações pessoais -->

                                                <hr>

                                                <!-- Inicio submenu cadastrar -->
                                                <div id="submenu-cadastrar">

                                                      <div class="listador">
                                                            <a id="btn-lista-cadastrar" class="controlador a-perfil a-perfil-estilo" href="#cadastrar" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="cadastrar"><i class="fas fa-pen"></i> Cadastrar</a>
                                                      </div>

                                                      <hr>

                                                      <div id="cadastrar" class="collapse" data-parent="#accordion-controler">

                                                            <ul class="personaliza-ul">
                                                                  <button class="controlador btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-cadastro-doaco" data-toggle="collapse" data-target="#collapse-cadastro-doacao" aria-expanded="false" aria-controls="collapse-cadastro-donation">Cadastrar doação</button>
                                                            </ul>
                                                            <ul class="personaliza-ul">
                                                                  <button class="controlador btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-cadastro-recebimento" data-toggle="collapse" data-target="#collapse-cadastro-recebimento" aria-expanded="false" aria-controls="collapse-cadastro-recebimento">Cadastrar recebimento</button>
                                                            </ul>
                                                            <ul class="personaliza-ul d-none d-lg-block">
                                                                  <button class="controlador btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-cadastro-adm" data-toggle="collapse" data-target="#collapse-cadastro-adm" aria-expanded="false" aria-controls="collapse-cadastro-adm">Cadastrar administrador</button>
                                                            </ul>
                                                            <hr>
                                                      </div>
                                                </div>
                                                <!-- Fim submenu cadastrar -->

                                                <!-- Inicio submenu cadastrados -->
                                                <div id="submenu-doacoes-transporte">

                                                      <div class="listador">
                                                            <a id="btn-lista-doacoes-transporte" class="controlador a-perfil a-perfil-estilo" href="#doacoes-transporte" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="doacoes-transporte"><i class="fas fa-dolly"></i> Doações & Transporte</a>
                                                      </div>

                                                      <hr>

                                                      <div id="doacoes-transporte" class="collapse" data-parent="#accordion-controler">
                                                            <ul class="personaliza-ul">
                                                                  <button class="controlador btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-doacoes-realizadas" data-toggle="collapse" data-target="#collapse-doacoes-realizadas" aria-expanded="false" aria-controls="collapse-doacoes-realizadas">Doações realizadas</button>
                                                            </ul>
                                                            <ul class="personaliza-ul">
                                                                  <button class="controlador btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-doacoes-recebidas" data-toggle="collapse" data-target="#collapse-doacoes-recebidas" aria-expanded="false" aria-controls="collapse-doacoes-recebidas">Doações recebidas</button>
                                                            </ul>
                                                            <ul class="personaliza-ul">
                                                                  <button class="btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-transportes" data-toggle="collapse" data-target="#collapse-transportes" aria-expanded="false" aria-controls="collapse-transportes">Transportes</button>
                                                            </ul>
                                                            <hr>
                                                      </div>
                                                </div>
                                                <!-- Fim submenu cadastrados -->

                                                <!-- Inicio submenu cadastrados -->
                                                <div id="submenu-cadatros">
                                                      <div class="listador">
                                                            <a id="btn-lista-cadastros" class="controlador a-perfil a-perfil-estilo" href="#cadastros" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="cadastros"><i class="fas fa-box-open"></i> Cadastrados</a>
                                                      </div>

                                                      <div id="cadastros" class="collapse" data-parent="#accordion-controler">

                                                            <hr>

                                                            <ul class="personaliza-ul">
                                                                  <button class="controlador btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-equipamentos-estoque" data-toggle="collapse" data-target="#collapse-equipamentos-estoque" aria-expanded="false" aria-controls="collapse-equipamentos-estoque">Equipamentos em estoque</button>
                                                            </ul>
                                                            <ul class="personaliza-ul">
                                                                  <button class="controlador btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-instituicoes-cadastradas" data-toggle="collapse" data-target="#collapse-instituicoes-cadastradas" aria-expanded="false" aria-controls="collapse-instituicoes-cadastradas">Instituições cadastradas</button>
                                                            </ul>
                                                            <ul class="personaliza-ul">
                                                                  <button class="controlador btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-doadores-cadastrados" data-toggle="collapse" data-target="#collapse-doadores-cadastrados" aria-expanded="false" aria-controls="collapse-doadores-cadastrados">Doadores cadastradas</button>
                                                            </ul>
                                                            <ul class="personaliza-ul">
                                                                  <button class="controlador btn btn-block btn-confirmar btn-ajuste-tamanho" type="button" id="btn-adm-cadastrados" data-toggle="collapse" data-target="#collapse-adm-cadastrados" aria-expanded="false" aria-controls="collapse-adm-cadastrados">Administradores cadastrados</button>
                                                            </ul>
                                                      </div>
                                                </div>
                                                <!-- Fim submenu cadastrados -->
                                          </li>
                                    </div>
                                    <!-- Fim lista de botoes -->

                                    <!-- Inicio tabelas de dados -->
                                    <div class="col-md-8 offset-md-1 mt-4 mb-4">
                                          <div class="row">

                                                <!-- Inicio informações pessoais -->
                                                <div class="col-12">
                                                      <div class="accordion" id="accordion-controler-informacoes-pessoais">
                                                            <div class="collapse informacao" id="collapse-informacoes-pessoais-perfil" aria-labelledby="btn-informacoes-pessoais-perfil">
                                                                  <div class="card card-body card-margem">
                                                                        <h3 class="text-cor">Informações pessoais</h3>
                                                                        <hr class="bg-base mt-0">
                                                                        <?php getInformacoesPessoais(); ?>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim informações pessoais -->

                                          <!-- SESSÃO DE CADASTROS
                                          ----------------------------------------------------------------------------------- -->
                                          <!-- Inicio cadastrar doações -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-cadastro-doacao" aria-labelledby="btn-cadastro-doacao" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <form name="cadastro-doacao" id="cadastro-doacao" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                                                  <fieldset name="fieldset-cadastro-doacao" id="fieldset-cadastro-doacao">
                                                                        <legend>Cadastrar doação</legend>
                                                                        <div class="form-group">
                                                                        </div>
                                                                  </fieldset>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim cadastrar doações -->

                                          <!-- Inicio cadastrar recebimento -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-cadastro-recebimento" aria-labelledby="btn-cadastro-recebimento" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <form name="cadastro-recebimento" id="cadastro-recebimento" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                                                  <fieldset name="-fieldset-cadastro-recebimento" id="fieldset-cadastro-recebimento">
                                                                        <legend>Cadastrar recebimento</legend>
                                                                        <div class="form-group">
                                                                        </div>
                                                                  </fieldset>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim cadastrar recebimento -->

                                          <!-- Inicio cadastrar novo adm -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-cadastro-adm" aria-labelledby="btn-cadastro-adm" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <h3 class="text-cor">Cadastrar novo administrador</h3>

                                                            <hr class="bg-base mt-0">
                                                            <?php cadastroAdm(); ?>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim cadastrar novo adm -->


                                          <!-- SESSÃO DE DOAÇÕES E TRANSPORTE
                                          ----------------------------------------------------------------------------------- -->
                                          <!-- Inicio daoções realizadas -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-doacoes-realizadas" aria-labelledby="btn-doacoes-realizadas" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <form name="doacoes-realizadas" id="doacoes-realizadas" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                                                  <fieldset name="fieldset-doacoes-realizadas" id="fieldset-doacoes-realizadas">
                                                                        <legend>Doações realizadas</legend>
                                                                        <div class="form-group">
                                                                        </div>
                                                                  </fieldset>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim doações realizadas -->

                                          <!-- Inicio daoções recebidas -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-doacoes-recebidas" aria-labelledby="btn-doacoes-recebidas" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <form name="cadastro-doacoes-recebidas" id="cadastro-doacoes-recebidas" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                                                  <fieldset name="fieldset-doacoes-recebidas" id="fieldset-doacoes-recebidas">
                                                                        <legend>Doações recebidas</legend>
                                                                        <div class="form-group">
                                                                        </div>
                                                                  </fieldset>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim doações recebidas -->

                                          <!-- Inicio transportes -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-transportes" aria-labelledby="btn-transportes" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <form name="transportes" id="transportes" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                                                  <fieldset name="fieldset-transportes" id="fieldset-transportes">
                                                                        <legend>Transportes</legend>
                                                                        <div class="form-group">
                                                                        </div>
                                                                  </fieldset>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim transportes -->

                                          <!-- SEÇÃO CADASTRADOS 
                                          ------------------------------------------------------------------------------------->
                                          <!-- Inicio equipamentos em estoque -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-equipamentos-estoque" aria-labelledby="btn-equipamentos-estoque" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <form name="equipamentos-estoque" id="equipamentos-estoque" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                                                  <fieldset name="fieldset-equipamentos-estoque" id="fieldset-equipamentos-estoque">
                                                                        <legend>Equipamentos em estoque</legend>
                                                                        <div class="form-group">
                                                                        </div>
                                                                  </fieldset>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim equipamentos em estoque-->

                                          <!-- Inicio instituições cadastradas -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-instituicoes-cadastradas" aria-labelledby="btn-instituicoes-cadastradas" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <form name="instituicoes-cadastradas" id="instituicoes-cadastradas" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                                                  <fieldset name="fieldset-instituicoes-cadastradas" id="fieldset-instituicoes-cadastradas">
                                                                        <legend>Instituições cadastradas</legend>
                                                                        <div class="form-group">
                                                                        </div>
                                                                  </fieldset>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim Instituições cadastradas-->

                                          <!-- Inicio doadores cadastrados -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-doadores-cadastrados" aria-labelledby="btn-doadores-cadastrados" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <form name="doadores-cadastrados" id="doadores-cadastrados" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                                                  <fieldset name="fieldset-doadores-cadastrados" id="fieldset-doadores-cadastrados">
                                                                        <legend>Doadores cadastrados</legend>
                                                                        <div class="form-group">
                                                                        </div>
                                                                  </fieldset>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim doadores cadastrados-->

                                          <!-- Inicio adms cadastrados -->
                                          <div class="col-12">
                                                <div class="collapse" id="collapse-adm-cadastrados" aria-labelledby="btn-adm-cadastrados" data-parent="#accordion-controler-cards">
                                                      <div class="card card-body card-margem">
                                                            <form name="adm-cadastrados" id="adm-cadastrados" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                                                  <fieldset name="fieldset-adm-cadastrados" id="fieldset-adm-cadastrados">
                                                                        <legend>Administradores cadastrados</legend>
                                                                        <div class="form-group">
                                                                        </div>
                                                                  </fieldset>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim adms cadastrados-->
                                    </div>
                              </div>
                        </div>
                        <!-- Fim Tabelas de dados -->
                  </div>
            </div>
            </div>
            <!-- Fim section principal -->
      </section>

      <!-- MODAIS -->
      <div>
            <!-- MODAIS GERAIS
            --------------------------------- -->
            <!-- Modal do botão sair -->
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

            <!-- MODAIS DE EDIÇÃO
            --------------------------------- -->
            <!-- Modal erro de edição -->
            <div class="modal fade" id="modal-alteracao-invalida" tabindex="-1" role="dialog" aria-labelledby="modal-sucesso-alteracao-corpo" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title" id="modal-sucesso-alteracao-corpo">
                                          — Dados inválidos ou não preenchidos —</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true"><i class="fa fa-window-close text-dark"></i></span>
                                    </button>
                              </div>
                              <div class="modal-body">
                                    <b>- Por favor, insira dados válidos.</b><br>
                                    <b>- Possíveis erros:</b>
                                    <ul>
                                          <li>Campos em branco</li>
                                          <li>Menos de 2 caracteres em um dos campos</li>
                                          <li>Nenhuma edição foi efetuada</li>
                                    </ul>
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-confirmar" data-dismiss="modal">Ok</button>
                              </div>
                        </div>
                  </div>
            </div>

            <!-- MODAIS CADASTRADOS
            --------------------------------- -->
            <!-- Modal senhaInválida -->
            <div id="modal-senha-invalida" class="modal fade" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title">
                                          Senha Inválida
                                    </h5>
                              </div>
                              <div class="modal-body">
                                    <p>Requisitos que podem
                                          não
                                          ter sido
                                          atendidos:
                                    </p>
                                    <ul>
                                          <li>Não foram
                                                usadas
                                                letras
                                                mínusculas e
                                                maiúsculas;
                                          </li>
                                          <li>Não foram
                                                usados
                                                números;
                                          </li>
                                          <li>Existência de
                                                epaços em
                                                branco;</li>
                                          <li>Existência de
                                                TAB.</li>
                                    </ul>
                              </div>
                              <div class="modal-footer">
                                    <button id="botaoFecharSenhaInvalida" type="button" class="btn btn-confirmar" data-dismiss="modal">Fechar</button>
                              </div>
                        </div>
                  </div>
            </div>

            <!-- Modal senhasNaoConferem -->
            <div id="modal-senhas-nao-conferem" class="modal fade bd-example-modal-sm"" tabindex=" -1" role="dialog">
                  <div class="modal-dialog" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title">
                                          Senhas não conferem!
                                    </h5>
                              </div>
                              <div class="modal-footer">
                                    <button id="botaoFecharSenhasNaoConferem" type="button" class="btn btn-confirmar" data-dismiss="modal">Fechar</button>
                              </div>
                        </div>
                  </div>
            </div>

            <!-- Modal do botão cancelar -->
            <div class="modal fade" id="modal-cancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                          Cancelar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true"><i class="fa fa-window-close text-dark"></i></span>
                                    </button>
                              </div>
                              <div class="modal-body">
                                    Ao clicar em <strong>"Ok"</strong> você vai deletar os dados
                                    do
                                    formulário. Tem
                                    certeza
                                    que deseja fazer isso?
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-cancelar" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-confirmar" onclick="resetaForm();" data-dismiss="modal">Ok</button>
                              </div>
                        </div>
                  </div>
            </div>

            <!-- MODAIS SEGURANÇA
            --------------------------------- -->
            <!-- Modal edição email -->

            <!-- Modal edição senha -->


            <!-- MODAIS CADASTRADOS
            --------------------------------- -->
            <!-- Modal edita equipamento -->
            <!-- <div class="modal fade scroll" id="modal-edita-informacao" tabindex="-1" role="dialog" aria-labelledby="modal-edita-graduacao-body" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title" id="modal-edita-graduacao-body">
                                          — Editar informação —</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true"><i class="fa fa-window-close text-dark"></i></span>
                                    </button>
                              </div>
                              <div class="modal-body scroll">
                                    <form action="" method="post">
                                          <div class="row">
                                                <div class="col-12">
                                                      <h3 class="text-cor">Informações pessoais<small><a href="#modal-confirmar-edita-informacao" data-toggle="modal" class="ml-1">Editar</a></small></h3>
                                                      <hr class="bg-base mt-0">
                                                      
                                                </div>
                                          </div>
                                    </form>
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-cancelar" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-confirmar" name="edita-informacao">Enviar</button>
                              </div>
                              </form>
                        </div>

                  </div>
            </div> -->


            <!-- MODAIS DE CONFIRMAÇÂO 
            ---------------------------- --->
            <!-- Modal Confirma edição -->
            <div class="modal fade" id="modal-confirmar-edicao" tabindex="-1" role="dialog" aria-labelledby="modal-confirmar-edicao-body" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title" id="modal-confirmar-edicao-body">
                                          — Deseja editar seus dados?— </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true"><i class="fa fa-window-close text-dark"></i></span>
                                    </button>
                              </div>
                              <div class="modal-body">
                                    <p> Se abrir outras opções, a edição será <b>automaticamente cancelada</b>. Deseja continuar?<p>
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-cancelar" data-dismiss="modal">Cancelar</button>
                                    <button type="button" id="confirmar-edicao" class="btn btn-confirmar text-white" onclick='botoesEdicaoPerfil();'>Confirmar</button>
                              </div>
                        </div>
                  </div>
            </div>

      </div>
      <!-- FIM MODAIS -->

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