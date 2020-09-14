<?php

require_once "php/config.php";

?>

<!DOCTYPE html>
<html id="login" lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Locastyle CSS -->
      <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/edge/stylesheets/locastyle.css">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <!-- Link Font-Awesome -->
      <script src="https://kit.fontawesome.com/635b72a438.js" crossorigin="anonymous"></script>

      <!-- Link CSS -->
      <link rel="stylesheet" href="css/estilo.css">


      <title>Portal Fênix - Login</title>
</head>

<body id="login">
      <!-- Início section Login -->
      <div class="container-fluid">
            <div class="row">
                  <div class="login-form  col-sm-8 offset-sm-2  col-md-6 offset-md-3  col-lg-5 offset-lg-4  col-xl-4 ">
                        <h1 class="text-center titulo-login">Projeto Fênix</h1>
                        <form action="php/logar.php" autocomplete="off" method="POST">

                              <!-- Inputs -->
                              <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" name="email" placeholder="user@mail.com" class="form-control">
                              </div>
                              <div class="form-group">
                                    <label for="senha">Senha:</label>
                                    <div class="ls-prefix-group">
                                          <input type="password" id="senha" name="senha" placeholder="********" class="form-control">
                                          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye eye-ajuste-cor" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#senha" href="#">
                                          </a>
                                    </div>
                              </div>

                              <!-- Opcoes -->
                              <div class="row">
                                    <div class="col-4 offset-1 offset-md-2">
                                          <a href="cadastro.php" class="a-login" target="_blank" rel="noopener noreferrer">Cadastre-se</a>
                                    </div>
                                    <div class="col-6">
                                          <a href="esqueceuSenha.php" class="a-login" target="_blank" rel="noopener noreferrer">Esqueceu a senha?</a>
                                    </div>
                              </div>

                              <!-- Botoes -->
                              <div class="row mt-4">
                                    <div class="offset-2 col-8 offset-md-0 col-md-6">
                                          <button type="submit" class="btn btn-confirmar text-uppercase btn-block">Login</button>
                                    </div>
                                    <div class=" offset-2 col-8 offset-md-0 col-md-6 mt-4 mt-md-0">
                                          <button type="button" class="btn btn-cancelar text-uppercase btn-block" onclick="location.href='index.php'">Cancelar</button>
                                    </div>

                              </div>
                        </form>
                  </div>
            </div>
      </div>
      <!-- /Fim section Login -->

      <!-- Atribuição da imagem ao artista -->
      <!-- <div id="atribuicao-imagem" class=""> Imagem de <strong><a href="https://pixabay.com/pt/users/Manuchi-1728328/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2462431">Денис Марчук</a></strong> por <strong><a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=5012239">Pixabay</a></strong></div> -->

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
            <!-- Locastyle JS-->
            <script src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>
            <!-- Manter links de JavaScript abaixo do CDN Jquery -->
            <!-- Link main.js -->
            <script src="script/main.js"></script>
      </div>




</body>

</html>