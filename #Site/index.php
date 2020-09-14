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

<body id="index" data-spy="scroll" data-target="#nav-cabecalho" data-offset="85">


      <!-- Inicio Cabeçalho-->
      <header>
            <?php require_once "php/inc/nav-header.php" ?>

      </header>
      <!-- /Fim Cabeçalho-->

      <!-- Inicio scrollpsy -->
      <!-- Inicio Section Home -->
      <section id="topo">
            <!-- Inicio carousel -->
            <!-- Aqui serve para por sombra -->
            <div id="topo-container" class="shadow-lg p-3 mb-5 bg-white rounded">

                  <!-- Indicador do slide -->
                  <div id="carousel-imagens-topo" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                              <li data-target="#carousel-imagens-topo" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-imagens-topo" data-slide-to="1"></li>
                              <li data-target="#carousel-imagens-topo" data-slide-to="2"></li>
                        </ol>

                        <!-- Inicio Carousel Inner -->
                        <div class="carousel-inner">

                              <div class="carousel-item active">
                                    <img src="https://source.unsplash.com/random/300x100" class="d-block w-100 img-fluid" width="100" alt="...">

                                    <div class="carousel-caption d-none d-md-block">
                                          <div class="text-white bg-dark py-4 px-5">
                                                <h3>Home</h3>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                      elit. Pariatur voluptatum enim deleniti. Facere
                                                      possimus eaq</p>
                                          </div>
                                    </div>
                              </div>
                              <div class="carousel-item">
                                    <img src="https://source.unsplash.com/random/300x100" class="d-block w-100 img-fluid" width="100" alt="...">

                                    <div class="carousel-caption d-none d-md-block">
                                          <div class="text-warning">
                                                <h3>Item 2</h3>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                      elit. Pariatur voluptatum enim deleniti. Facere
                                                      possimus eaq</p>
                                          </div>
                                    </div>
                              </div>
                              <div class="carousel-item">
                                    <img src="https://source.unsplash.com/random/300x100"" class=" d-block w-100 img-fluid" width="100" alt="...">

                                    <div class="carousel-caption d-none d-md-block">
                                          <div class="text-warning">
                                                <h3>Item 3</h3>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                      elit. Pariatur voluptatum enim deleniti. Facere
                                                      possimus eaq</p>
                                          </div>
                                    </div>
                              </div>

                        </div>
                        <!-- Botões de controle do carousel -->
                        <a class="carousel-control-prev" href="#carousel-imagens-topo" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-imagens-topo" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Próxima</span>
                        </a>
                        <!-- Fim botões de controle do carousel -->

                        <!-- Fim indicador -->
                  </div>

                  <!-- Fim carousel -->
            </div>
            <!-- Fim Section HOME -->
      </section>
      <!-- /fim section HOME -->

      <!-- Inicio section HISTÓRIA -->
      <section id="historia" class="section-cor shadow">
            <div id="historia-container" class=" shadow container ajuste-container">
                  <h1 class="text-cor h1-ajuste-tamanho">História</h1>
                  <hr class="bg-base pt-1 mb-4">

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis amet, ex, blanditiis
                        ratione maiores consequatur tempore dolores provident magnam totam explicabo labore.
                        Cumque neque deserunt dolore blanditiis aliquam deleniti cupiditate?</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis amet, ex, blanditiis
                        ratione maiores consequatur tempore dolores provident magnam totam explicabo labore.
                        Cumque neque deserunt dolore blanditiis aliquam deleniti cupiditate?</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis amet, ex, blanditiis
                        ratione maiores consequatur tempore dolores provident magnam totam explicabo labore.
                        Cumque neque deserunt dolore blanditiis aliquam deleniti cupiditate?</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis amet, ex, blanditiis
                        ratione maiores consequatur tempore dolores provident magnam totam explicabo labore.
                        Cumque neque deserunt dolore blanditiis aliquam deleniti cupiditate?</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis amet, ex, blanditiis
                        ratione maiores consequatur tempore dolores provident magnam totam explicabo labore.
                        Cumque neque deserunt dolore blanditiis aliquam deleniti cupiditate?</p>
            </div>
      </section>
      <!-- /fim Section HISTORIA -->

      <!-- Inicio section EDIÇÕES -->
      <section id="edicoes" class="section-cor shadow">
            <div id="edicoes-container" class=" shadow container ajuste-container">
                  <h1 class="text-cor h1-ajuste-tamanho">Edições</h1>
                  <hr class="bg-base pt-1 mb-4">

                  <!-- Inicio Cards -->
                  <div class="card-group">
                        <div class="container">
                              <div class="row">
                                    <div class="card col-md-6 col-lg-3 my-4 mx-auto my-lg-0 pt-3 px-4">
                                          <img src="https://source.unsplash.com/random/300x100" class="card-img-top" alt="...">
                                          <div class="card-body">
                                                <h5 class="card-title">1ª Edição</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                      adipisicing elit. Ex facere nostrum unde mollitia?
                                                      Laudantium reiciendis, accusamus dicta, eaque porro amet ad
                                                      ipsum obcaecati, exercitationem dolor earum maxime impedit
                                                      aperiam labore?</p>
                                                <button class="btn btn-block btn-outline-info">Leia mais</button>
                                          </div>
                                    </div>
                                    <div class="card col-md-6 col-lg-3 mx-auto my-4 my-lg-0 pt-3 px-4">
                                          <img src="https://source.unsplash.com/random/300x100" class="card-img-top" alt="...">
                                          <div class="card-body">
                                                <h5 class="card-title">2ª Edição</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                      adipisicing elit. Ex facere nostrum unde mollitia?
                                                      Laudantium reiciendis, accusamus dicta, eaque porro amet ad
                                                      ipsum obcaecati, exercitationem dolor earum maxime impedit
                                                      aperiam labore?</p>
                                                <button class="btn btn-block btn-outline-info">Leia mais</button>
                                          </div>
                                    </div>
                                    <div class="card col-md-12 col-lg-3 my-4 my-lg-0 mx-auto pt-3 px-4">
                                          <img src="https://source.unsplash.com/random/300x100" class="card-img-top" alt="...">
                                          <div class="card-body">
                                                <h5 class="card-title">3ª Edição</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                                                      adipisicing elit. Ex facere nostrum unde mollitia?
                                                      Laudantium reiciendis, accusamus dicta, eaque porro amet ad
                                                      ipsum obcaecati, exercitationem dolor earum maxime impedit
                                                      aperiam labore?</p>
                                                <button class="btn btn-block btn-outline-info">Leia mais</button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- Fim Cards -->
            </div>
      </section>
      <!-- Fim section EDIÇÕES -->

      <!-- Inicio section SOBRE -->
      <section id="sobre" class="section-cor shadow">
            <div id="sobre-container" class="shadow container ajuste-container">
                  <h1 class="text-cor h1-ajuste-tamanho">Sobre</h1>
                  <hr class="bg-base pt-1 mb-4">
            </div>

      </section>
      <!-- Fim section SOBRE -->

      <!-- Inicio section LOCALIZAÇÃO -->
      <section id="localizacao-contato" class="shadow section-cor mb-rem">
            <div id="localizacao-contato-container" class="shadow container ajuste-container">
                  <h1 class="text-cor h1-ajuste-tamanho">Localização & Contato</h1>
                  <hr class="bg-base pt-1 mb-4">

                  <div class="container">
                        <div class="row">
                              <div class="col-md-12">
                                    <div class="d-none d-md-block">
                                          <iframe class="d-inline" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13944.498714430132!2d-49.6386033!3d-29.1020003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc17d2dd5de33a10f!2sInstituto%20Federal%20Catarinense%20-%20C%C3%A2mpus%20Avan%C3%A7ado%20Sombrio%20-%20(%20IFC%20Sombrio%20)!5e0!3m2!1spt-BR!2sbr!4v1583697873741!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                    </div>


                                    <div class="d-block d-md-none border">
                                          <span>
                                                <p class="subtitulo"> <i class="fa fa-map-marker fa-lg"></i>
                                                      Localização:</p>
                                                <p class="texto-subtitulo"><a class="texto-subtitulo-link" target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/place/Instituto+Federal+Catarinense+-+C%C3%A2mpus+Avan%C3%A7ado+Sombrio+-+(+IFC+Sombrio+)+-+Av.+Pref.+Francisco+Lumertz+J%C3%BAnior,+931+-+Janu%C3%A1ria,+Sombrio+-+SC,+88960-000/@-29.1020003,-49.6386033,17z/data=!4m2!3m1!1s0x9522163f89863cb7:0xc17d2dd5de33a10f">
                                                            Av. Pref. Francisco Lumertz Júnior, 931 -
                                                            Januária, Sombrio (SC) - CEP
                                                            88960-000</a></p>
                                          </span>
                                          <hr>
                                          <span>
                                                <p class="subtitulo"> <i class="fa fa-phone" aria-hidden="true"></i>
                                                      Contato:</p>
                                                <p class="texto-subtitulo"><a href="tel:+5504835334001" class="texto-subtitulo-link">+55 (48) 3533-4001</a> — <a href="tel:+5504835332712" class="texto-subtitulo-link"> +55
                                                            (48) 3533-2712</a></p>
                                          </span>
                                    </div>
                              </div>
                              <div class="d-none d-md-block col-md-12 mt-3">
                                    <p class="text-md-center">
                                          <span class="subtitulo"> <i class="fa fa-phone" aria-hidden="true"></i>
                                                Contato:</span>
                                          <span class="texto-subtitulo"><a href="tel:+5504835334001" class="texto-subtitulo-link">+55 (48) 3533-4001</a> — <a href="tel:+5504835332712" class="texto-subtitulo-link"> +55
                                                      (48) 3533-2712</a></span>
                                    </p>
                              </div>
                        </div>
                  </div>

            </div>
      </section>
      <!-- Fim section LOCALIZAÇÃO -->

      <!-- Fim Scrollpsy -->
      </div>


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