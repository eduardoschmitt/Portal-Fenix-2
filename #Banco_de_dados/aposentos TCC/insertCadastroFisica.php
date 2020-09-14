<?php

require_once '../config.php';

$conn = getConnection();

// MYSQLI
$conn_mysqli = getConnection();

// MODELOS PARA USAR
// MODELO INSERT COM EXEC=> INSERT INTO email (email, senha, codinstpessoa) VALUES ('$email', '$senha', '$codinstpessoa');
// VARIAVEIS VINDAS DO POST
// Modelo => $var = $_POST["name"] ou isset($_POST['email']) ? $_POST['email'] : null;
// ___________________________________________

// ================================= INSERT CADASTRO Fisica =================================


// =============================== SELECIONA DADOS ===============================



// ============================ TABELAS AUXILIARES ============================

// ====================== TABELA pessoafis ======================

// INFORMAÇÕES PESSOAIS
// ---------
$cpf = $_POST["cpfFisica"];
$profissao = $_POST["profissaoFisica"];

// ====================== FIM TABELA pessoafis ======================


// ====================== TABELA endereco ======================

// ENDEREÇO
// ---------
$rua = $_POST["ruaFisica"];
$bairro = $_POST["bairroFisica"];
$cidade = $_POST["cidadeFisica"];
$estado = $_POST["estadoFisica"];
$numero = $_POST["numeroFisica"];
$complemento = $_POST["complementoFisica"];

// ====================== FIM TABELA endereco ======================

// ============================ FIM TABELAS AUXILIARES ============================




// ============================ TABELAS PRINCIPAIS ============================

// ====================== TABELA inst_pessoa  ======================

// INFORMAÇÕES PESSOAIS
// ---------
$nome = $_POST["nomeFisica"];
// Garante que seja inserido o valor 0 no banco de dados
if ($_POST["patrimonioFisica"] == "Privado") {
      $tipopatrim = 0;
}

// ====================== FIM TABELA inst_pessoa ======================


//====================== TABELA email ======================

// SEGURANÇA
// ---------
$email = $_POST["emailFisica"];
$senha = $_POST["senhaFisica"];
$senha = sha1($senha);

// ====================== FIM TABELA email ======================


// ====================== TABELA telefone ======================

// INFORMAÇÕES PESSOAIS
// ---------
$tel = $_POST["telefoneFisica"];
$cel = $_POST["celularFisica"];

// ====================== FIM TABELA telefone ======================


// ====================== TABELA recebe_doa ======================

// EXTRA
// ---------

if (($_POST['urgenciaFisica'] == "" || $_POST['urgenciaFisica'] == NULL) && ($_POST['tipoEquipFisica'] == "" || $_POST['tipoEquipFisica'] == NULL) && ($_POST['periodoFisica'] == "" || $_POST['periodoFisica'] == NULL)) {
      $datarecomendada = 'NULL';
} else {
      if (isset($_POST['dataRecomendadaFisica']) && $_POST['dataRecomendadaFisica'] != "") {
            $datarecomendada = $_POST['dataRecomendadaFisica'];
      } else {
            $datarecomendada = 'NULL';
      }
}
$urgencia = $_POST["urgenciaFisica"];
$tipoequip = $_POST["tipoEquipFisica"];
$periodorecomendado = $_POST["periodoFisica"];
$observacao = $_POST["observacaoFisica"];

// ======================  FIM TABELA recebe_doa ======================

// ============================ FIM TABELAS PRINCIPAIS ============================



// =============================== FIM SELECIONA DADOS ===============================


// =========================================== INSERTS ====================================================

// PROCURA EMAILS CADSTRADOS 
// ------------------------------------
$search = mysqli_query($conn_mysqli, "SELECT email FROM email WHERE email = '$email'");
$num_rows = mysqli_num_rows($search);
// ------------------------------------

if (!($num_rows > 0)) { // se não for maior que zero o numero de emails cadastradoS
      // executa o INSERT 

      // INSERT TABELAS AUXILIARES
      // ------------------------------
      // === ENDEREÇO ===
      $stmt_endereco = "INSERT INTO endereco (rua, bairro, cidade, estado, numero, complemento) VALUES ('$rua', '$bairro', '$cidade', '$estado', '$numero', '$complemento')";

      // Verifica se tudo ocorreu como deveria
      if ($conn->exec($stmt_endereco)) {
            echo "";
            $fkendereco = $conn->lastInsertId();
      } else {
            echo "Erro ao salvar Endereço!";
            exit;
      }
      // ======

      // === PESSOAFIS ===
      $stmt_pessoafis = "INSERT INTO pessoafis (cpf, profissao) VALUES ('$cpf', '$profissao')";

      if ($conn->exec($stmt_pessoafis)) {
            echo "";
            $fkcpf = $conn->lastInsertId();
      } else {
            echo "Erro ao salvar Pessoafis!";
            exit;
      }
      // ======
      // -------------------------------

      // INSERT TABELAS PRINCIAPIS
      // -------------------------------
      // === INST_PESSOA ===
      $stmt_inst_pessoa = "INSERT INTO inst_pessoa (nome, tipopatrim, codendereco, cpf) VALUES ('$nome', '$tipopatrim', '$fkendereco', '$fkcpf')";

      if ($conn->exec($stmt_inst_pessoa)) {
            echo "";
            $fkinstpessoa = $conn->lastInsertId();
      } else {
            echo "Erro ao salvar Inst_pessoa!";
            exit;
      }
      // =====

      // === EMAIL ===
      $stmt_email = "INSERT INTO email (email, senha, codinstpessoa) VALUES ('$email', '$senha', '$fkinstpessoa')";

      if ($conn->exec($stmt_email)) {
            echo "";
            $fkemail = $conn->lastInsertId();
      } else {
            echo "Erro ao salvar Email!";
            exit;
      }
      // ======

      // === USUARIOS ===
      $stmt_usuarios = "INSERT INTO usuarios (nivel, codinstpessoa, codemail) VALUES ('$tipopatrim', '$fkinstpessoa', '$fkemail')";

      if ($conn->exec($stmt_usuarios)) {
            echo "";
            $fkusuarios = $conn->lastInsertId();
      } else {
            echo "Erro ao salvar Usuarios!";
            exit;
      }
      // ======

      // === TELEFONE ===
      $stmt_telefone = "INSERT INTO telefone (tel, cel, codinstpessoa) VALUES ('$tel', '$cel', '$fkinstpessoa')";

      if ($conn->exec($stmt_telefone)) {
            echo "";
            $fktelefone = $conn->lastInsertId();
      } else {
            echo "Erro ao salvar Telefone!";
            exit;
      }
      // ======

      //====== RECEBE_DOA ======
      // o IF é por conta de $datarecomendada que não possui ' ', pois deve ser enviado o atributo null, caso não haja data
      if ($datarecomendada === 'NULL') {
            $stmt_recebe_doa = "INSERT INTO recebe_doa (datarecomendada, equipamento, observacao, periodorecomendado, urgencia, codinstpessoa) VALUES ($datarecomendada, '$tipoequip', '$observacao', '$periodorecomendado', '$urgencia', '$fkinstpessoa')";

            if ($conn->exec($stmt_recebe_doa)) {
                  echo "";
                  $fkrecebedoa = $conn->lastInsertId();
            } else {
                  echo "Erro ao salvar Recebe Doa!";
                  exit;
            }
      } else {
            $stmt_recebe_doa = "INSERT INTO recebe_doa (datarecomendada, equipamento, observacao, periodorecomendado, urgencia, codinstpessoa) VALUES ('$datarecomendada', '$tipoequip', '$observacao', '$periodorecomendado', '$urgencia', '$fkinstpessoa')";

            if ($conn->exec($stmt_recebe_doa)) {
                  echo "";
                  $fkrecebedoa = $conn->lastInsertId();
            } else {
                  echo "Erro ao salvar Recebe Doa!";
                  exit;
            }
      }
      // ======
      //-------------------------------

      // Se tudo ocorrer bem, fecha o $conn_mysqli e imprime alert
      echo "<script>window.location='../../index.php';alert('[$nome] você foi cadastrado com sucesso!');</script>";
      mysqli_close($conn_mysqli);
} else {
      // informa que tal registro já existe
      echo "<script>window.location='../../cadastro.php';alert('ERRO: [$email] Já está cadastrado!');</script>";
      mysqli_close($conn_mysqli);
}
// ============================ FIM INSERT CADASTRO =================================


































// COM PREPARE
// ---------------------------

// Modelo => INSERT INTO tabela () VALUES (? ou :IDENTIFICADOR)

// $stmt = $conn->prepare($sql);

// $stmt->bindParam(":EMAIL", $email);
// $stmt->bindParam(":SENHA", $senha);

// if($stmt->execute()){
//       echo "Salvo com sucesso!!";
// }else{
//        echo "Erro ao salvar!";
// }
