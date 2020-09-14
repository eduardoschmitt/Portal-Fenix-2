<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <!-- Link Font-Awesome -->
      <script src="https://use.fontawesome.com/610c00d43f.js"></script>

      <!-- Link CSS -->
      <link rel="stylesheet" href="css/estilo.css">

      <title>Portal Fênix</title>
</head>

<!-- data-spy="scroll" data-target="#nav-cabecalho" data-offset="50" -> no body, serve para fazer com que o item ativo na mavbar seja marcado por meio do scroll -->

<body id="index" data-spy="scroll" data-target="#nav-cabecalho" data-offset="70">

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
                                          <a class="nav-link active" href="#topo-container"> <i class="fa fa-home mr-1" aria-hidden="true"></i> Home</a>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="#historia-container"> <i class="fa fa-book mr-1" aria-hidden="true"></i> História</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#edicoes-container"> <i class="fa fa-bookmark mr-2" aria-hidden="true"></i> Edições</a>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="#sobre-container"> <i class="fa fa-address-card mr-1" aria-hidden="true"></i> Sobre</a>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="#localizacao-contato-container"><i class="fa fa-phone mr-2"></i> Contato</a>
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
                                          <a class="nav-link" href="perfil.php"> <i class="d-inline-block d-lg-none fa fa-user-circle mr-2" aria-hidden="true"></i> <i class="d-none d-lg-inline-block fa fa-user-circle fa-lg " aria-hidden="true"></i><span class="d-lg-none d-inline d-inline-login">Perfil</span></a>
                                          <p class="sr-only">Entrar</p>
                                    </li>
                              </ul>
                        </div>
                  </div>
            </nav>
            <!-- /Fim Nav -->

      </header>
      <!-- /Fim Cabeçalho-->

      <!-- BÁSICO \ INFORMAÇÕES -->
      <div id="informacao-adm">
            <a class="legend-fieldset mb-2 a-titulo-form" data-toggle="collapse" href="#collapse-fieldset-informacoes" role="button" aria-expanded="true" aria-controls="collapse-fieldset-informacoes">
                  &loz; Informações
            </a>

            <hr class="mt-0 mb-3">

            <div class="collapse" id="collapse-fieldset-informacoes" data-parent="#accordion-controler-informacoes-pessoais">
                  <form name="form-informacao-adm" id="form-informacao-adm" autocomplete="off" method="post" action="php/crud/update.php">
                        <div class="form-group">
                              <div class="row">
                                    <div class="col-xl-6 mb-3">
                                          <label for="nome-adm" class="label-ajuste"><b>Nome:</b></label>
                                          <input type="text" class="form-control-plaintext" name="nome-adm" id="nome-adm" value="' . $nome . '" readonly>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                          <label for="matricula-adm" class="label-ajuste"><b>Matrícula:</b></label>
                                          <input type="text" class="form-control-plaintext" name="matricula-adm" id="matricula-adm" value="' . $matricula . '" readonly>
                                    </div>
                              </div>

                              <div class="row mt-md-2">
                                    <div class="col-xl-6 mb-3">
                                          <label for="graduacao-adm" class="label-ajuste"><b>Graduação:</b></label>
                                          <input type="text" class="editavel form-control-plaintext" name="graduacao-adm" id="graduacao-adm" value="' .  $graduacao  . '" readonly>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                          <label for="data_nasc-adm" class="label-ajuste"><b>Data de Nascimento</b></label>
                                          <input type="date" class="form-control-plaintext no-icon-date" name="data_nasc-adm" id="data_nasc-adm" value="' . $data_nasc . '" readonly>
                                    </div>
                              </div>

                              <div class="row mt-md-2 mb-3">
                                    <div class="col-12 mb-2">
                                          <label for="funcao-adm" class="label-ajuste"><b>Função:</b></label>
                                          <input type="text" class="editavel form-control-plaintext" name="funcao-adm" id="funcao-adm" value="' . $funcao . '" readonly>
                                    </div>
                              </div>
                              <div id="botoes-edita-informacao-adm"></div>

                              <div id="block-button-informacao-adm">
                                    <button type="button" id="btn-edita-informacao-adm" class="btn btn-confirmar btn-block text-white a-editar-legend" data-toggle="modal" data-target="#modal-confirmar-edicao">Editar informações</button>
                              </div>
                        </div>
                  </form>
            </div>



            <!-- SEGURANÇA -->
            <fieldset name="fieldset-seguranca-adm" id="fieldset-seguranca-adm">
                  <a class="legend-fieldset" data-toggle="collapse" href="#collapse-fieldset-seguranca" role="button" aria-expanded="true" aria-controls="collapse-fieldset-seguranca">
                        <legend class="mb-2">&loz; Segurança</legend>
                  </a>

                  <hr class="mt-0 mb-3">

                  <div class="collapse" id="collapse-fieldset-seguranca" data-parent="#accordion-controler-informacoes-pessoais">
                        <div class="form-group">
                              <div class="row">
                                    <div class="col-xl-6 mb-3">
                                          <label for="email" class="label-ajuste"><b>Email:</b></label>
                                          <input type="text" class="form-control-plaintext" name="email" id="email" value="' . $email . '" readonly>
                                          <small><a href="">Editar</a></small>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                          <label for="senha" class="label-ajuste"><b>Senha:</b></label>
                                          <input type="text" class="form-control-plaintext" name="senha" id="senha" value="*********" readonly>
                                          <small><a href="">Editar</a></small>
                                    </div>
                              </div>
                        </div>
            </fieldset>

            <!-- CONTATO -->
            <div id="contato-adm">
                  <a class="legend-fieldset mb-2 a-titulo-form" data-toggle="collapse" href="#collapse-fieldset-contato" role="button" aria-expanded="true" aria-controls="collapse-fieldset-contato">
                        &loz; Informações
                  </a>

                  <hr class="mt-0 mb-3">

                  <div class="collapse" id="collapse-fieldset-contato" data-parent="#accordion-controler-informacoes-pessoais">
                        <form name="form-contato-adm" id="form-contato-adm" autocomplete="off" method="post" action="php/crud/updates/updateContato.php">
                              <div class="form-group">
                                    <div class="row">
                                          <div class="col-xl-6 mb-3">
                                                <label for="celular-adm" class="label-ajuste"><b>Celular:</b></label>
                                                <input type="text" class="form-control-plaintext" name="celular-adm" id="celular-adm" value="' . $cel . '" readonly>
                                          </div>
                                          <div class="col-xl-6 mb-3">
                                                <label for="telefone-adm" class="label-ajuste"><b>Telefone:</b></label>
                                                <input type="text" class="form-control-plaintext" name="telefone-adm" id="telefone-adm" value="' . $tel . '" readonly>
                                          </div>
                                    </div>
                                    <div id="botoes-edita-contato-adm"></div>

                                    <div id="block-button-contato-adm">
                                          <button type="button" id="btn-edita-contato-adm" class="btn btn-confirmar btn-block text-white a-editar-legend" data-toggle="modal" data-target="#modal-confirmar-edicao">Editar informações</button>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>

            <!-- ENDEREÇO -->
            <div id="endereco-adm">
                  <a class="legend-fieldset" data-toggle="collapse" href="#collapse-fieldset-endereco" role="button" aria-expanded="true" aria-controls="collapse-fieldset-endereco">
                        <legend class="legend-fieldset mb-2">&loz; Endereço</legend>
                  </a>

                  <hr class="mt-0 mb-3">

                  <div class="collapse" id="collapse-fieldset-endereco" data-parent="#accordion-controler-informacoes-pessoais">
                        <form name="form-endereco-adm" id="form-endereco-adm" autocomplete="off" method="post" action="php/crud/updates/updateEndereco.php">
                              <div class="form-group">
                                    <div class="row">
                                          <div class="col-xl-6 mb-3">
                                                <label for="rua" class="label-ajuste"><b>Rua:</b></label>
                                                <input type="text" class="form-control-plaintext" name="rua" id="rua" value="' . $rua . '" readonly>
                                          </div>
                                          <div class="col-xl-6 mb-3">
                                                <label for="bairro" class="label-ajuste"><b>Bairro:</b></label>
                                                <input type="text" class="form-control-plaintext" name="bairro" id="bairro" value="' . $bairro . '" readonly>
                                          </div>
                                    </div>
                                    <div class="row mt-md-2">
                                          <div class="col-xl-6 mb-3">
                                                <label for="cidade" class="label-ajuste"><b>Cidade:</b></label>
                                                <input type="text" class="form-control-plaintext" name="cidade" id="cidade" value="' . $cidade . '" readonly>
                                          </div>
                                          <div class="col-xl-6 mb-3">
                                                <label for="estado" class="label-ajuste"><b>Estado:</b></label>
                                                <input type="text" class="form-control-plaintext" name="estado" id="estado" value="' . $estado . '" readonly>
                                          </div>
                                    </div>
                                    <div class="row mt-md-2 mb-3">
                                          <div class="col-xl-2 mb-3">
                                                <label for="numero" class="label-ajuste"><b>Número:</b></label>
                                                <input type="text" class="form-control-plaintext" name="numero" id="numero" value="' . $numero . '" readonly>
                                          </div>
                                          <div class="col-xl-4 mb-3">
                                                <label for="cep" class="label-ajuste"><b>CEP:</b></label>
                                                <input type="text" class="form-control-plaintext" name="cep" id="cep" value="' . $cep . '" readonly>
                                          </div>
                                          <div class="col-xl-6">
                                                <label for="complemento" class="label-ajuste"><b>Complemento:</b></label>
                                                <input type="text" class="form-control-plaintext" name="complemento" id="complemento" value="' . $complemento . '" readonly>
                                          </div>
                                    </div>
                                    <a class="btn btn-confirmar btn-block a-editar-legend" href="">Editar endreço</a>
                              </div>
                        </form>
                  </div>
            </div>
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
                                    você será redirecionado para a página principal.
                                    Tem certeza que deseja fazer isso?
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                                    <button type="reset" class="btn btn-danger" onclick="location.href='php/sair.php'">Sair</button>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!-- Optional JavaScript -->
      <div>

            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
            <!--Engine de localização-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
            </script>
      </div>
</body>

</html>