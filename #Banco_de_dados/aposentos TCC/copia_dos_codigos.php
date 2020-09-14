<?php
// inclui o arquivo de inicialização
require_once('config.php');

// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : 'null';
$senha = isset($_POST['senha']) ? $_POST['senha'] : 'null';


$PDO = getConnection();


// VERIFICA A SENHA NO BANCO
$senha = sha1($senha);
$sql_usuarios = "SELECT cod, email, senha FROM email WHERE email = :email AND senha = :senha";
$stmt = $PDO->prepare($sql_usuarios);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);

$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// -----------------------------------------------

if (count($usuarios) <= 0) {
      // echo "<script>window.location='../login.php';alert('Email ou Senha inválidos');</script>";
      exit;
} else {

      // VERIFICA QUAL O TIPO DE COD, SE ADM OU INSTPESSOA
      // ====================================================     
      session_start();

      $sql_nivel = "SELECT E.cod, E.email, E.senha, E.codadm, E.codinstpessoa, U.nivel, I.nome AS nome_instpessoa, A.nome AS nome_adm
      FROM email AS E 
      INNER JOIN usuarios AS U ON E.cod = U.codemail
      LEFT JOIN inst_pessoa AS I ON U.codinstpessoa = I.cod
      LEFT JOIN admnistrador AS A ON U.codadm = A.cod 
      WHERE email = $email AND senha = $senha";

      // Faz a query
      $consulta = $pdo->query($sql_nivel);

      // Passa linha por linha da query
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

            if ($linha['codinstpessoa'] == "" || NULL) {
                  $_SESSION['user_id'] = $linha[0]['codadm'];
            } else {
                  $_SESSION['user_id'] = $linha[0]['codinstpessoa'];
            }

            // Verifica se é inst_pessoa ou adm
            if ($linha['nome_instpessoa'] == "" || NULL) {
                  $_SESSION['nome'] = $linha[0]['nome_adm'];
            } else {
                  $_SESSION['nome'] = $linha[0]['nome_instpessoa'];
            }

            // nivel de acesso 
            $_SESSION['nivel'] = $linha[0]['nivel'];
      }

      // ATRIBUI VALORES A SESSÃO
      // ============================
      $_SESSION['logged_in'] = true;
      $_SESSION['cod_email'] = $usuarios[0]['cod'];
      $_SESSION['email'] = $usuarios[0]['email'];

      // Manda a mensagem de sucasso
      echo "<script>window.location='../index.php';alert('[$email] Seu login foi efetuado com sucesso!');</script>";
}



// (Opcional) atribuir identificadores para as tabelas, exemplo => tabela AS T 
// (Opcional) atribuir nome as colunas => tablea.coluna AS [IDENTIFICADOR_COLUNA] -> a  tabela será exibida com esse nome
// Obs: ao fazer isso, não se muda o nome dela no banco, apenas altera para vizualização no select

// =========================
// SELECT PARA CAPTURAR DADOS

// SELECT C.NOMECARGO AS [CARGO], F.NOMEFUNCIONARIO AS [FUNCIONÁRIO], F.SALARIOFUNCIONARIO AS [SALÁRIO]
// FROM CARGO AS C
// INNER JOIN FUNCIONARIO AS F ON C.IDCARGO = F.IDCARGO

// ======================
// SELECT PARA EXBIR DADOS

// $consulta = $pdo->query("SELECT nome, usuario FROM login;");

// while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
//     echo "Nome: {$linha['nome']} - Usuário: {$linha['usuario']}<br />";
// }


?>

<body>



      <!-- COPIA NAV SEM LOGIN-->
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
                              <li class="nav-item divisor"></li>

                              <!-- Divisor quando é menu expandido-->
                              <li class="nav-item d-md-none d-inline-block divisor-horizontal">
                              </li>

                              <!-- Personalizado -->
                              <li class="nav-item">
                                    <a class="nav-link" href="php/inc/nav-header.php">Cadastre-se</a>
                              </li>

                              <li class="nav-item">
                                    <a class="nav-link" href="login.php"><span class="d-lg-none d-inline d-inline-login">Login</span><i class="fa fa-sign-in fa-lg ml-2" aria-hidden="true"></i>

                                    </a>
                                    <p class="sr-only">Entrar</p>
                              </li>
                        </ul>

                  </div>
            </div>
      </nav>
      <!-- /Fim Nav -->

<!-- COPIA CARD INFORMAÇÕES PESSOAIS ADM -->
      <!-- Inicio informações pessoais -->
      <div class="col-12">
            <div class="accordion" id="accordion-controler-informacoes-pessoais">
                  <div class="collapse" id="collapse-informacoes-pessoais-perfil" aria-labelledby="btn-informacoes-pessoais-perfil">
                        <div class="card card-body card-margem">
                              <h3 class="text-cor">Informações pessoais</h3>
                              <hr class="bg-base mt-0">

                              <form name="cadastro-adm" id="cadastro-adm" autocomplete="off" action="php/crud/insertCadastroAdm.php" method="post">
                                    <!-- <i id="loading-1"class="fas fa-circle-notch fa-spin fa-2x"></i>    -->

                                    <!-- BÁSICO \ INFORMAÇÕES -->
                                    <fieldset name="fieldset-informacoes-adm" id="fieldset-informacoes-adm">
                                          <a class="legend-fieldset" data-toggle="collapse" href="#collapse-fieldset-informacoes" role="button" aria-expanded="true" aria-controls="collapse-fieldset-informacoes">
                                                <legend class="mb-2">&loz; Informações</legend>
                                          </a>

                                          <hr class="mt-0 mb-3">

                                          <div class="collapse" id="collapse-fieldset-informacoes" data-parent="#accordion-controler-informacoes-pessoais">
                                                <div class="form-group">
                                                      <div class="row">
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="nome" class="label-ajuste"><b>Nome:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="nome" id="nome" value="André Valerim de Freitas" readonly>
                                                            </div>
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="matricula" class="label-ajuste"><b>Matrícula:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="matricula" id="matricula" value="André Valerim de Freitas" readonly>
                                                            </div>

                                                      </div>
                                                      <div class="row mt-md-2">
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="graduacao" class="label-ajuste"><b>Graduação:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="graduacao" id="graduacao" value="*******" readonly>
                                                                  <small><a href="" class="ml-1">Editar</a></small>
                                                            </div>
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="matricula" class="label-ajuste"><b>Data de Nascimento</b></label>
                                                                  <input type="date" class="form-control-plaintext" name="matricula" id="matricula" value="2004-03-09" readonly>
                                                                  <small><a href="" class="ml-1">Editar</a></small>
                                                            </div>

                                                      </div>
                                                      <div class="row mt-md-2">
                                                            <div class="col-12 mb-2">
                                                                  <label for="funcao" class="label-ajuste"><b>Função:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="funcao" id="funcao" value="*******" readonly>
                                                                  <small><a href="" class="ml-1">Editar</a></small>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </fieldset>

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
                                                                  <input type="text" class="form-control-plaintext" name="email" id="email" value="andrevalerim@gmail.com" readonly>
                                                                  <small><a href="">Editar</a></small>
                                                            </div>
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="senha" class="label-ajuste"><b>Senha:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="senha" id="senha" value="*******" readonly>
                                                                  <small><a href="">Editar</a></small>
                                                            </div>
                                                      </div>
                                                </div>
                                    </fieldset>

                                    <!-- CONTATO -->
                                    <fieldset name="fieldset-contato-adm" id="fieldset-contato-adm">
                                          <a class="legend-fieldset" data-toggle="collapse" href="#collapse-fieldset-contato" role="button" aria-expanded="true" aria-controls="collapse-fieldset-contato">
                                                <legend class="mb-2">&loz; Contato</legend>
                                          </a>

                                          <hr class="mt-0 mb-3">

                                          <div class="collapse" id="collapse-fieldset-contato" data-parent="#accordion-controler-informacoes-pessoais">
                                                <div class="form-group">
                                                      <div class="row">
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="celular" class="label-ajuste"><b>Celular:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="celular" id="celular" value="André Valerim de Freitas" readonly>
                                                                  <small><a href="">Editar</a></small>
                                                            </div>
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="telefone" class="label-ajuste"><b>Matrícula:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="telefone" id="telefone" value="André Valerim de Freitas" readonly>
                                                            </div>
                                                      </div>
                                                </div>
                                    </fieldset>

                                    <!-- ENDEREÇO -->
                                    <fieldset name="fieldset-endereco-adm" id="fieldset-endereco-adm">
                                          <a class="legend-fieldset" data-toggle="collapse" href="#collapse-fieldset-endereco" role="button" aria-expanded="true" aria-controls="collapse-fieldset-endereco">
                                                <legend class="legend-fieldset mb-2">&loz; Endereço</legend>
                                          </a>

                                          <hr class="mt-0 mb-3">

                                          <div class="collapse" id="collapse-fieldset-endereco" data-parent="#accordion-controler-informacoes-pessoais">
                                                <div class="form-group">
                                                      <div class="row">
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="rua" class="label-ajuste"><b>Rua:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="rua" id="rua" value="André Valerim de Freitas" readonly>
                                                            </div>
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="bairro" class="label-ajuste"><b>Bairro:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="bairro" id="bairro" value="*******" readonly>
                                                            </div>
                                                      </div>
                                                      <div class="row mt-md-2">
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="cidade" class="label-ajuste"><b>Cidade:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="cidade" id="cidade" value="André Valerim de Freitas" readonly>
                                                            </div>
                                                            <div class="col-xl-6 mb-3">
                                                                  <label for="estado" class="label-ajuste"><b>Estado:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="estado" id="estado" value="*******" readonly>
                                                            </div>
                                                      </div>
                                                      <div class="row mt-md-2 mb-3">
                                                            <div class="col-xl-2 mb-3">
                                                                  <label for="numero" class="label-ajuste"><b>Número:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="numero" id="numero" value="1550" readonly>
                                                            </div>
                                                            <div class="col-xl-4 mb-3">
                                                                  <label for="cep" class="label-ajuste"><b>CEP:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="cep" id="cep" value="88955-000" readonly>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                  <label for="complemento" class="label-ajuste"><b>Complemento:</b></label>
                                                                  <input type="text" class="form-control-plaintext" name="complemento" id="complemento" value="" readonly>
                                                            </div>
                                                      </div>
                                                      <a class="btn btn-confirmar btn-block a-editar-legend" href="">Editar endreço</a>
                                                </div>
                                          </div>
                                    </fieldset>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Fim informações pessoais -->