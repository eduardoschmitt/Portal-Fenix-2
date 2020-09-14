<?php

session_start();
/* Conexão com o Banco de Dados
*
*
* @return \PDO
*/
function getConnection()
{

      $dsn = 'mysql:host=localhost; dbname=portalfenix2020;charset=utf8';
      $user = 'root';
      $password = 'root';


      try {

            $pdo = new PDO($dsn, $user, $password);

            return $pdo;
      } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
      }
}

// Conexão via Mysqli
function getConnection_mysqli()
{
      return mysqli_connect("localhost", "root", "root", "portalfenix2020");
}

// Expulsa o usuário caso não esteja logado como adm
function expulsaUsuario()
{
      if ((!isset($_SESSION['logged_in'])) || !(($_SESSION['nivel'] == 2))) {
            header("Location: login.php");
      }
}

// Expulsa o usuário caso não esteja logado
function expulsaVisitante()
{
      if (!isset($_SESSION['logged_in'])) {
            header("Location: login.php");
      }
}

// Expulsa Adm caso tente entrar no perfil usuário
function expulsaAdm()
{

      if (!(($_SESSION['nivel'] == 0))  || !(($_SESSION['nivel'] == 1))) {
            header("Location: index.php");
      }
}

// Expulsa o usuário logado
function expulsaUsuarioLogado()
{
      if (isset($_SESSION['logged_in'])) {
            header("Location: index.php");
      }
}

// Dá bom dia, boa tarde, de acordo com a hora
function SaudacaoHoraDoDia()
{
      date_default_timezone_set('America/Sao_Paulo');
      $horaAtual = idate("H");

      if ($horaAtual < 6) {
            echo 'Olá, <span class="sombra-nome">' . $_SESSION["primeiro_nome"] . '</span>, o(a) Sr(a).Madrugada!';
      } else if ($horaAtual >= 6  && $horaAtual < 12) {
            echo 'Bom dia, <span class="sombra-nome">' . $_SESSION["primeiro_nome"] . '</span>!';
      } else if ($horaAtual >= 12 && $horaAtual < 18) {
            echo 'Boa tarde, <span class="sombra-nome">' . $_SESSION["primeiro_nome"] . '</span>!';
      } else if ($horaAtual >= 18) {
            echo 'Boa noite, <span class="sombra-nome">' . $_SESSION["primeiro_nome"] . '</span>!';
      }
}
