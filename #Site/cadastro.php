<?php
require_once "php/config.php";
expulsaUsuarioLogado();
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

      <title>Portal Fênix - Cadastro</title>
</head>

<body id="index-cadastro">
      <!-- Inicio Cabeçalho-->
      <header>

            <!-- Início Nav -->
            <nav class="py-3 navbar navbar-expand-lg navbar-dark bg-base fixed-top">
                  <div class="container">

                        <!-- Logo -->
                        <a href="index.php" class="navbar-brand">
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
                                          <a class="nav-link active" href="cadastro.php"><i class="fa fa-user-plus mr-md-1 mr-lg-0"></i> Cadastro</a>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link nav-link-ajuste" href="login.php"><i class="fa fa-sign-in fa-lg pr-1 mr-2" aria-hidden="true"></i><span class="d-lg-none d-inline d-inline-login">Login</span></a>
                                          <p class="sr-only">Entrar</p>
                                    </li>
                              </ul>

                        </div>
                  </div>
            </nav>
            <!-- /Fim Nav -->

      </header>
      <!-- /Fim Cabeçalho-->

      <!-- Início section Cadstro -->
      <section id="cadastro" class="d-flex shadow-lg">
            <div class="container">
                  <!-- ALERTA SOBRE ESCOLHER UM DOS QUESTIONÁRIOS -->
                  <div class="alert alert-dark alert-dismissible">
                        <!-- Data-disimiss, serve para fechar o alerta -->
                        <button class="close" type="button" data-dismiss="alert">
                              &times;
                        </button>
                        <strong>Selecione</strong> um dos formulários abaixo: Pessoa <strong>Física</strong> ou
                        <strong>Jurídica</strong>

                  </div>
                  <h1 class="display-4 text-cor h1-ajuste-tamanho">Cadastro</h1>
                  <hr class="bg-base pt-1 mb-4">

                  <!-- OPTAR POR UM DOS QUESTIONÁRIOS -->
                  <ul class="nav nav-pills">
                        <li class="nav-item">
                              <a class="nav-link active btn-base" href="#Fisica" id="formFisica">Pessoa Física</a>
                        </li>
                        <li class="nav-item ml-3">
                              <a class="nav-link active btn-base" href="#Juridica" id="formJuridica">Pessoa
                                    Jurídica</a>
                        </li>
                  </ul>
                  <hr class="mb-4">

                  <!-- CADSTRO PESSOA FISICA -->
                  <div id="cadastro-fisica" class="container my-0 py-0 px-0 ajuste-container-cadastro">
                        <form name="pessoaFisica" id="pessoaFisica" autocomplete="off" action="php/crud/insertCadastros.php" method="post">

                              <!-- INFORMAÇÔES PESSOAIS -->
                              <fieldset name="informacoesPessoaisFisica" id="informacoesPessoais-fieldset-fisica">
                                    <legend>Informações Pessoais</legend>
                                    <div class="form-group">
                                          <div class="container ml-0 px-0 pt-2 pb-3 ajuste-container-cadastro">

                                                <!-- Linha 1 -->
                                                <div class="row">
                                                      <div class="col-md-4 mb-3">
                                                            <label for="nomeFisica">Nome: <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="nomeFisica" id="nomeFisica" placeholder="Ex: Fulano Cicrano Beltrano" required>
                                                      </div>

                                                      <div class="col-md-4 mb-3">
                                                            <label for="cpfFisica">CPF: <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="cpfFisica" id="cpfFisica" minlength="14" maxlength="14" placeholder="Ex: 333.444.555-55" onkeypress="$(this).mask('000.000.000-00');" required>
                                                      </div>


                                                      <div class="col-md-4 mb-3">
                                                            <label for="patrimonioFisica">Patrimônio: <span class="text-danger">*</span></label>
                                                            <input class="form-control" name="patrimonioFisica" id="patrimonioFisica" placeholder="Privado" value="Privado" readonly="true" required>
                                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                                  *Patrimônio será indicado como privado pois se trata de uma pessoa física.
                                                            </small>
                                                      </div>
                                                </div>
                                                <!-- Fim linha 1 -->

                                                <!-- Linha 2 -->
                                                <div class="form-group mt-4">
                                                      <div class="row">
                                                            <div class="col-md-4 mb-3">
                                                                  <label for="profissaoFisica">Profissão: <span class="text-danger">*</span></label>
                                                                  <input type="text" class="form-control" name="profissaoFisica" id="profissaoFisica" placeholder="Ex: Técnico em informática">
                                                            </div>

                                                            <div class="col-md-4 mb-3">
                                                                  <label for="celularFisica">Celular: <span class="text-danger">*</span></label>
                                                                  <input type="text" class="form-control" name="celularFisica" minlength="1" maxlength="15" id="celularFisica" placeholder=" Ex: (48) 95555-4444" onkeypress="$(this).mask('(00) 90000-0000')">
                                                            </div>

                                                            <div class="col-md-4 mb-3">
                                                                  <label for="telefoneFisica">Telefone: <span class="text-danger">*</span></label>
                                                                  <input type="text" class="form-control" name="telefoneFisica" minlength="14" maxlength="14" id="telefoneFisica" placeholder=" Ex: (48) 3333-4444" onkeypress="$(this).mask('(00) 0000-0000')">
                                                                  <small id="passwordHelpBlock" class="form-text text-muted">
                                                                        *Não obrigatório se houver sido sinalizado um celular
                                                                  </small>
                                                            </div>

                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <!-- Fim linha 2 -->
                              </fieldset>

                              <hr>

                              <!-- SEGURANÇA -->
                              <fieldset name="segurancaFisica" id="seguranca-fieldset-fisica">
                                    <legend>Segurança</legend>
                                    <div class="form-group">
                                          <div class="container ml-0 px-0 pt-2 pb-3 ajuste-container-cadastro">
                                                <div class="row">
                                                      <div class="col-md-4 mb-3">
                                                            <label for="emailFisica">Email: <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" name="emailFisica" id="emailFisica" placeholder="Ex: user@mail.com" required>
                                                      </div>

                                                      <div class="col-md-4 mb-3">
                                                            <label for="senhaFisica">Senha: <span class="text-danger">*</span>
                                                                  <a class="badge" data-toggle="popover" data-html="true" data-trigger="hover" title="Senha Excelente" data-content="Opcional:<ul><li>Ter mais de 14 caracteres</li><li>Conter caracteres como: '@', '!', '#', '$', '_' e  '&'</li>"><i class="fa fa-lg fa-info-circle a-info-senha" aria-hidden="true"></i></a>
                                                            </label>
                                                            <input type="password" class="form-control" name="senhaFisica" id="senhaFisica" placeholder="********" aria-describedby="passwordHelpBlock" onkeyup="javascript:verificaSenhaFisica();" required>
                                                            <!-- HelpBlock personalizado -->
                                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                                  <span id="helpBlock">
                                                                        *Sua senha deve ter pelo menos 6
                                                                        caracteres e atender
                                                                        os seguintes requisitos:
                                                                  </span>
                                                                  <br>
                                                                  <!-- Regras personalizadas -->
                                                                  <li id="minMaiSenha">Letras
                                                                        maiúsculas e minúsculas;</li>
                                                                  <li id="numSenha">Números.</li>
                                                                  </ul>
                                                            </small>

                                                            <div>
                                                                  <!-- Mostra a barra de força -->
                                                                  <div id="barraForca"></div>
                                                                  <!-- Mostra o nível de força -->
                                                                  <div id="nivelForca"></div>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-4 mb-3">
                                                            <label for="confirmarSenhaFisica">Confirmar
                                                                  Senha: <span class="text-danger">*</span></label>
                                                            <input type="password" class="form-control" name="confirmarSenhaFisica" id="confirmarSenhaFisica" placeholder="********" required>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </fieldset>

                              <hr>

                              <!-- ENDEREÇO -->
                              <fieldset name="enderecoFisica" id="endereco-fieldset-fisica">
                                    <legend>Endereço</legend>
                                    <div class="form-group">
                                          <div class="container ml-0 px-0 pt-2 pb-3 ajuste-container-cadastro">

                                                <!-- Linha 1 -->
                                                <div class="form-group">
                                                      <div class="row">

                                                            <div class="col-md-7 col-lg-5 mb-3">
                                                                  <label for="ruaFisica">Rua: <span class="text-danger">*</span></label>
                                                                  <input type="text" class="form-control" name="ruaFisica" id="ruaFisica" placeholder="Ex: Rua dos Postes" required>
                                                            </div>

                                                            <div class="col-md-5 col-lg-3 mb-3">
                                                                  <label for="bairroFisica">Bairro: <span class="text-danger">*</span></label>
                                                                  <input type="text" class="form-control" name="bairroFisica" id="bairroFisica" placeholder="Ex: Bairro da Luz" required>
                                                            </div>

                                                            <div class="col-md-6 col-lg-2 mb-3">
                                                                  <label for="numeroFisica">Número: <span class="text-danger">*</span></label>
                                                                  <input type="number" class="form-control" name="numeroFisica" id="numeroFisica" placeholder="Ex: 100" min="1" required>
                                                            </div>

                                                            <div class="col-md-6 col-lg-2 mb-3">
                                                                  <label for="cepFisica">CEP: <span class="text-danger">*</span></label>
                                                                  <input type="text" class="form-control" name="cepFisica" id="cepFisica" placeholder="Ex: 88955-000" min="9" onkeypress="$(this).mask('00000-000')" required>
                                                            </div>

                                                      </div>
                                                </div>
                                                <!-- Linha 2 -->
                                                <div class="form-group mt-3 ">
                                                      <div class="row">

                                                            <!-- SEM API -->
                                                            <div class="col-lg-5 mb-3">
                                                                  <label for="cidadeFisica">Cidade: <span class="text-danger">*</span></label>
                                                                  <input type="text" class="form-control" name="cidadeFisica" id="cidadeFisica" placeholder="Ex: Sombrio" required>
                                                            </div>

                                                            <!-- CASO USE API -->
                                                            <!-- <div class="col-md-5 mb-3">
                                                                              <label for="cidade">Cidade:</label>
                                                                              <select type="text" class="custom-select" name="cidade"
                                                                                    id="cidade" required>
                                                                                    <option value=""> — Selecione uma opção — </option>
                                                                                    <option value="Florianópolis">Florianópolis</option>
                                                                                    <option value="Porto Alegre">Porto Alegre</option>
                                                                                    <option value="Curitiba">Curitiba</option>
                                                                              </select>
                                                                        </div> -->

                                                            <div class="col-md-6 col-lg-3 mb-3">
                                                                  <label for="estadoFisica">Estado: <span class="text-danger">*</span></label>
                                                                  <select type="text" class="custom-select" name="estadoFisica" id="estadoFisica" required>
                                                                        <option value=""> — Selecione uma opção —
                                                                        </option>
                                                                        <option value="SC">Santa Catarina</option>
                                                                        <option value="RS">Rio Grande do Sul
                                                                        </option>
                                                                        <option value="PR">Paraná</option>
                                                                  </select>
                                                                  <small class="text-danger">*Atendemos apenas a
                                                                        região Sul do
                                                                        Brasil</small>
                                                            </div>

                                                            <div class="col-md-6 col-lg-4 mb-3">
                                                                  <label for="complementoFisica">Complemento:</label>
                                                                  <input type="text" class="form-control" name="complementoFisica" id="complementoFisica" maxlength="130" placeholder="Ex: Apartamento 156">
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </fieldset>

                              <hr>

                              <!-- EXTRAS -->
                              <fieldset name="extrasFisica" id="extra-fieldset-fisica">
                                    <div class="mb-3">
                                          <legend>Extra - Informações para coleta de equipamentos</legend>
                                          <small class="text-danger">*Área não obrigatória</small>
                                    </div>
                                    <div class="form-group">
                                          <div class="container ml-0 px-0 pt-2 pb-3 ajuste-container-cadastro">
                                                <div class="row">
                                                      <div class="col-md-6 col-lg-3 mb-3">
                                                            <label for="tipoEquipFisica">Tipo de Equipamento:</label>
                                                            <select class="custom-select" name="tipoEquipFisica" id="tipoEquipFisica">
                                                                  <option value=""> — Selecione uma opção —
                                                                  </option>
                                                                  <option value="Notebook">Notebook</option>
                                                                  <option value="Computador">Computador</option>
                                                                  <option value="Impressora">Impressora</option>
                                                                  <option value=Diversos>Diversos</option>
                                                            </select>
                                                      </div>

                                                      <div class="col-md-6 col-lg-3 mb-3">
                                                            <label for="urgenciaFisica">Urgência</label>
                                                            <select class="custom-select" name="urgenciaFisica" id="urgenciaFisica">
                                                                  <option value=""> — Selecione uma opção —
                                                                  </option>
                                                                  <option value="Sem urgência">Sem urgência
                                                                  </option>
                                                                  <option class="text-success" value="Pouco urgente">
                                                                        Pouco urgente
                                                                  </option>
                                                                  <option class="text-warning" value="Urgente">
                                                                        Urgente</option>
                                                                  <option class="text-danger" value="Muito urgente">
                                                                        Muito urgente
                                                                  </option>
                                                            </select>
                                                      </div>

                                                      <div class="col-md-6 col-lg-3 mb-3">
                                                            <label class="" for="dataRecomendadaFisica">Data recomenda:</label>
                                                            <a class="badge" data-toggle="popover" data-html="true" data-trigger="hover" data-content="Neste campo você pode sugerir uma data de coleta para os equipamentos. <br> Ele está pré-preenchido por definição, porém esta data não é encaminhada com o formulário caso outros campos desta área extra não sejam preenchidos."><i class="fa fa-lg fa-info-circle a-info-senha" aria-hidden="true"></i></a>
                                                            <input type="date" class="form-control" name="dataRecomendadaFisica" id="dataRecomendadaFisica" onkeypress="return false" onkeydown="return false" value="<?php $ts = strtotime("+1 day");
                                                                                                                                                                                                                        echo date("Y-m-d", $ts) ?>" min="<?php $ts = strtotime("+1 day");
                                                                                                                                                                                                                                                            echo date("Y-m-d", $ts); ?>">
                                                      </div>
                                                      <div class="col-md-6 col-lg-3 mb-3">
                                                            <label for="periodoFisica">Periodo:</label>
                                                            <select class="custom-select" name="periodoFisica" id="periodoFisica">
                                                                  <option value=""> — Selecione uma opção —
                                                                  </option>
                                                                  <option value="Manhã">Manhã</option>
                                                                  <option value="Manhã">Tarde</option>
                                                                  <option value="Noite">Noite</option>
                                                                  <option value="Muito urgente">Sem preferência
                                                                  </option>
                                                            </select>
                                                      </div>

                                                      <div class="col-12 mb-3 mt-3 text-center">
                                                            <p for="observacaoFisica">Observação:</p>
                                                            <textarea class="ajuste-textarea-esm" name="observacaoFisica"></textarea>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </fieldset>
                              <div class="d-flex justify-content-center mt-2">
                                    <!-- Botão para ativar modal -->
                                    <div class="container mt-0">
                                          <div class="row">
                                                <div class="col-12 col-md-6">
                                                      <button type="button" class="btn btn-danger btn-md mr-4 w-100 w-md-25" value="Cancelar" data-toggle="modal" data-target="#modal-cancelar">Cancelar</button>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                      <button name="enviarFisica" id="enviarFisica" type="submit" class="btn btn-dark btn-md w-100 w-md-25 mt-2 mt-md-0">Enviar</button>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </form>
                  </div>
                  <!-- CADASTRO PESSOA JURIDICA -->
                  <div id="cadastro-juridica" class="container my-0 py-0 px-0  ajuste-container-cadastro">
                        <form id="pessoaJuridica" name="pessoaJuridica" action="php/crud/insertCadastros.php" autocomplete="off" method="post">

                              <!-- INFORMAÇÔES PESSOAIS -->
                              <fieldset name="informacoesPessoaisJuridica" id="informacoesPessoais-fieldset-juridica">
                                    <legend>Informações Institucionais</legend>
                                    <div class="form-group">
                                          <div class="container ml-0 px-0 pt-2 pb-3 ajuste-container-cadastro">

                                                <!-- Linha 1 -->
                                                <div class="row">
                                                      <div class="col-md-4 mb-3">
                                                            <label for="nomeJuridica">Nome: <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="nomeJuridica" id="nomeJuridica" placeholder="Ex: Fulano Cicrano Beltrano" required>
                                                      </div>

                                                      <div class="col-md-4 mb-3">
                                                            <label for="cnpjJuridica">CNPJ: <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="cnpjJuridica" id="cnpjJuridica" minlength="18" maxlength="18" placeholder="Ex: 39.756.444/0001-50" onkeypress="$(this).mask('00.000.000/0000-00');" required>
                                                      </div>

                                                      <div class="col-md-4 mb-3">
                                                            <label for="patrimonioJuridica">Patrimônio: <span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="patrimonioJuridica" id="patrimonioJuridica" value="Privado" required>
                                                                  <option value=""> — Selecione uma opção —
                                                                  </option>
                                                                  <option value="0">Privado</option>
                                                                  <option value="1">Público</option>
                                                            </select>
                                                            <small class="text-secondary">*Apenas intituições
                                                                  públicas recebem
                                                                  doações</small>
                                                      </div>
                                                </div>
                                                <!-- Fim linha 1 -->

                                                <!-- Linha 2 -->
                                                <div class="form-group mt-4">
                                                      <div class="row">
                                                            <div class="col-md-4 mb-3">
                                                                  <label for="areaAtuacaoJuridica">Área de
                                                                        atuação: <span class="text-danger">*</span></label>
                                                                  <input type="text" class="form-control" name="areaAtuacaoJuridica" id="areaAtuacaoJuridica" placeholder="Ex: Instituição de Caridade">
                                                            </div>

                                                            <div class="col-md-4 mb-3">
                                                                  <label for="celularJuridica">Celular: <span class="text-danger">*</span></label>
                                                                  <input required type="text" class="form-control" name="celularJuridica" id="celularJuridica" minlength="15" maxlength="15" placeholder=" Ex: (48) 95555-4444" onkeypress="$(this).mask('(00) 90000-0000')">
                                                            </div>

                                                            <!-- ADICIONAR AO BANCO -->
                                                            <div class="col-md-4 mb-3">
                                                                  <label for="telefoneJuridica">Telefone: <span class="text-danger">*</span></label>
                                                                  <input required type="text" class="form-control" name="telefoneJuridica" id="telefoneJuridica" minlength="14" maxlength="14" placeholder=" Ex: (48) 5555-4444" onkeypress="$(this).mask('(00) 0000-0000')">
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <!-- Fim linha 2 -->

                                    </div>
                              </fieldset>

                              <hr>

                              <!-- SEGURANÇA -->
                              <fieldset name="segurancaJuridica" id="seguranca-fieldset-juridica">
                                    <legend>Segurança</legend>
                                    <div class="form-group">
                                          <div class="container ml-0 px-0 pt-2 pb-3 ajuste-container-cadastro">
                                                <div class="row">
                                                      <div class="col-md-4 mb-3">
                                                            <label for="emailJuridica">Email: <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" name="emailJuridica" id="emailJuridica" placeholder="Ex: user@mail.com" required>
                                                      </div>

                                                      <div class="col-md-4 mb-3">
                                                            <label for="senhaJuridica">Senha: <span class="text-danger">*</span>
                                                                  <a class="badge" data-toggle="popover" data-placement="right" data-html="true" data-trigger="hover" title="Senha Excelente" data-content="Opcional:<ul><li>Ter mais de 14 caracteres</li><li>Conter caracteres como: '@', '!', '#', '$', '_' e  '&'</li>"><i class="fa fa-lg fa-info-circle a-info-senha" aria-hidden="true"></i></a>
                                                            </label>
                                                            <input type="password" class="form-control" aria-describedby="passwordHelpBlock" name="senhaJuridica" id="senhaJuridica" placeholder="********" onkeyup="javascript:verificaSenhaJuridica();" required>
                                                            <!-- HelpBlock personalizado -->
                                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                                  <span id="helpBlock1"> *Sua senha deve ter pelo menos
                                                                        6
                                                                        caracteres e atender
                                                                        os seguintes requisitos:
                                                                  </span>
                                                                  <br>
                                                                  <ul>
                                                                        <!-- Regras personalizadas -->
                                                                        <li id="minMaiSenha1">Letras
                                                                              maiúsculas e minúsculas;</li>
                                                                        <li id="numSenha1">Números.</li>
                                                                  </ul>

                                                            </small>

                                                            <div>
                                                                  <!-- Mostra a barra de força -->
                                                                  <div id="barraForca1"></div>
                                                                  <!-- Mostra o nível de força -->
                                                                  <div id="nivelForca1"></div>
                                                            </div>
                                                      </div>

                                                      <div class="col-md-4 mb-3">
                                                            <label for="confirmarSenhaJuridica">Confirmar
                                                                  Senha: <span class="text-danger">*</span></label>
                                                            <input type="password" class="form-control" name="confirmarSenhaJuridica" id="confirmarSenhaJuridica" placeholder="********" required>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </fieldset>

                              <hr>

                              <!-- ENDEREÇO -->
                              <fieldset name="enderecoJuridica" id="endereco-fieldset-juridica">
                                    <legend>Endereço</legend>
                                    <div class="form-group">
                                          <div class="container ml-0 px-0 pt-2 pb-3 ajuste-container-cadastro">

                                                <!-- Linha 1 -->
                                                <div class="row">

                                                      <div class="col-md-5 mb-3">
                                                            <label for="ruaJuridica">Rua: <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="ruaJuridica" id="ruaJuridica" placeholder="Ex: Rua dos Postes" required>
                                                      </div>

                                                      <div class="col-md-3 mb-3">
                                                            <label for="bairroJuridica">Bairro: <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="bairroJuridica" id="bairroJuridica" placeholder="Ex: Bairro da Luz" required>
                                                      </div>

                                                      <div class="col-md-2 mb-3">
                                                            <label for="numeroJuridica">Número: <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="numeroJuridica" id="numeroJuridica" placeholder="Ex: 100" min="1" required>
                                                      </div>

                                                      <div class="col-md-2 mb-3">
                                                            <label for="cepJuridica">CEP: <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="cepJuridica" id="cepJuridica" placeholder="Ex: 88955-000" min="9" onkeypress="$(this).mask('00.000-000')" required>
                                                      </div>

                                                </div>

                                                <!-- Linha 2 -->
                                                <div class="form-group mt-3">
                                                      <div class="row">

                                                            <div class="col-md-5 mb-3">
                                                                  <label for="cidadeJuridica">Cidade: <span class="text-danger">*</span></label>
                                                                  <input type="text" class="form-control" name="cidadeJuridica" id="cidadeJuridica" placeholder="Ex:Sombrio" required>
                                                            </div>

                                                            <div class="col-md-3 mb-3">
                                                                  <label for="estadoJuridica">Estado: <span class="text-danger">*</span></label>
                                                                  <select type="text" class="custom-select" name="estadoJuridica" id="estadoJuridica" required>
                                                                        <option value=""> — Selecione uma opção —
                                                                        </option>
                                                                        <option value="SC">Santa Catarina</option>
                                                                        <option value="RS">Rio Grande do Sul
                                                                        </option>
                                                                        <option value="PR">Paraná</option>
                                                                  </select>
                                                                  <small class="text-danger">*Atendemos apenas a
                                                                        região Sul do
                                                                        Brasil</small>
                                                            </div>


                                                            <div class="col-md-4 mb-3">
                                                                  <label for="complementoJuridica">Complemento:</label>
                                                                  <input type="text" class="form-control" name="complementoJuridica" id="complementoJuridica" maxlength="130" placeholder="Ex: Apartamento 156">
                                                            </div>

                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </fieldset>

                              <hr>

                              <!-- EXTRAS -->
                              <fieldset name="extrasJuridica" id="extra-fieldset-juridica">
                                    <div class="mb-3">
                                          <legend>Extra - Informações para coleta de equipamentos</legend>
                                          <small class="text-danger">*Área não obrigatória</small>
                                    </div>
                                    <div class="form-group">
                                          <div class="container ml-0 px-0 pt-2 pb-3 ajuste-container-cadastro">
                                                <div class="row">
                                                      <div class="col-md-6 col-lg-3 mb-3">
                                                            <label for="tipoEquipJuridica">Tipo de
                                                                  Equipamento:</label>
                                                            <select class="custom-select" name="tipoEquipJuridica" id="tipoEquipJuridica">
                                                                  <option value=""> — Selecione uma opção —
                                                                  </option>
                                                                  <option value="Notebook">Notebook</option>
                                                                  <option value="Computador">Computador</option>
                                                                  <option value="Impressora">Impressora</option>
                                                                  <option value=Diversos>Diversos</option>
                                                            </select>
                                                      </div>

                                                      <div class="col-md-6 col-lg-3 mb-3">
                                                            <label for="urgenciaJuridica">Urgência:</label>
                                                            <select class="custom-select" name="urgenciaJuridica" id="urgenciaJuridica">
                                                                  <option value=""> — Selecione uma opção —
                                                                  </option>
                                                                  <option value="Sem urgência">Sem urgência
                                                                  </option>
                                                                  <option class="text-success" value="Pouco urgente">
                                                                        Pouco urgente
                                                                  </option>
                                                                  <option class="text-warning" value="Urgente">
                                                                        Urgente</option>
                                                                  <option class="text-danger" value="Muito urgente">
                                                                        Muito urgente
                                                                  </option>
                                                            </select>
                                                      </div>

                                                      <div class="col-md-6 col-lg-3 mb-3">
                                                            <label class="" for="dataRecomendadaJuridica">Data
                                                                  recomendada:
                                                            </label>
                                                            <a class="badge" data-toggle="popover" data-html="true" data-trigger="hover" data-content="Neste campo você pode sugerir uma data de coleta para os equipamentos. <br> Ele está pré-preenchido por definição, porém esta data não é encaminhada com o formulário caso outros campos desta área extra não sejam preenchidos."><i class="fa fa-lg fa-info-circle a-info-senha" aria-hidden="true"></i></a>

                                                            <input type="date" value="<?php $ts = strtotime("+1 day");
                                                                                          echo date("Y-m-d", $ts); ?>" class="form-control" name="dataRecomendadaJuridica" id="dataRecomendadaJuridica" onkeypress="return false" onkeydown="return false" min="<?php $ts = strtotime("+1 day");
                                                                                                                                                                                                                                                                  echo date("Y-m-d", $ts); ?>">
                                                      </div>

                                                      <div class="col-md-6 col-lg-3 mb-3">
                                                            <label for="periodoJuridica">Periodo:</label>
                                                            <select class="custom-select" name="periodoJuridica" id="periodoJuridica">
                                                                  <option value=""> — Selecione uma opção —
                                                                  </option>
                                                                  <option value="Manhã">Manhã</option>
                                                                  <option value="Manhã">Tarde</option>
                                                                  <option value="Noite">Noite</option>
                                                                  <option value="Muito urgente">Sem preferência
                                                                  </option>
                                                            </select>
                                                      </div>

                                                      <!-- ADICIONAR -->
                                                      <div class="col-12 mb-3 mt-3 text-center d-none d-sm-block">
                                                            <p for="observacaoJuridica">Observação:</p>
                                                            <textarea class="ajuste-textarea-esm" name="observacaoJuridica"></textarea>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </fieldset>
                              <div class="d-flex justify-content-center mt-2">
                                    <!-- Botão para ativar modal -->
                                    <div class="container mt-0">
                                          <div class="row">
                                                <div class="col-12 col-md-6">
                                                      <button type="button" class="btn btn-danger btn-md mr-4 w-100 w-md-25" value="Cancelar" data-toggle="modal" data-target="#modal-cancelar">Cancelar</button>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                      <button type="submit" id="enviarJuridica" name="enviarJuridica" class="btn btn-dark btn-md w-100 w-md-25 mt-2 mt-md-0">Enviar</button>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </form>

                        <!-- Botões sem container -->
                        <!-- <div class="d-flex justify-content-center mt-4">-->
                        <!-- Botão para ativar modal 
                                    <button type="button" class="btn btn-danger btn-md mr-4 w-25" value="Cancelar"
                                          data-toggle="modal" data-target="#modal-cancelar">Cancelar</button>
                                    <button type="submit" class="btn btn-dark btn-md w-25">Enviar</button>
                              </div> -->
                  </div>

                  <!-- ÁREA DOS MODAIS -->
                  <div>
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
                                                formulário e será <strong>redirecionado</strong> para a página inicial. Tem
                                                certeza
                                                que deseja fazer isso?
                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-cancelar" data-dismiss="modal">Cancelar</button>
                                                <button type="reset" class="btn btn-confirmar" onclick="location.href='index.php'">Ok</button>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <!-- Modal senhaInválida -->
                        <div id="modal-senha-invalida" class="modal fade" tabindex="-3" role="dialog">
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
                        <div id="modal-senhas-nao-conferem" class="modal fade bd-example-modal-sm"" tabindex=" -2" role="dialog">
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

                  </div>
            </div>
      </section>
      <!-- /Fim section Cadastro -->

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