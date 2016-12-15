<!DOCTYPE html>
<html lang="pt-br">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="x-ua-compatible" content="ie=edge">
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>Exercício silábico</title>
          <meta name="description" content="" />
          <meta name="robots" content="index, follow" />

          <link rel="shortcut icon" href="favicon.png"/>
          <link rel="stylesheet" href="css/bootstrap.css"/>
          <link rel="stylesheet" href="css/bootstrap-theme.css"/>
          <link rel="stylesheet" href="css/auxiliares.css"/>
          <link rel="stylesheet" href="css/template.css"/>
          <link rel="stylesheet" href="css/exercicios.css"/>
          <link rel="stylesheet" href="css/silabico.css"/>
          <script src="js/jquery-3.1.1.js"></script>
     </head>

     <body class="cor-principal">  
          <header class="">               
               <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                         <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                                   <span class="sr-only">Toggle navigation</span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="home.php">alfa-aut</a>
                         </div>
                         <div class="navbar-collapse collapse" id="navbarCollapse">
                              <ul class="nav navbar-nav navbar-right">
                                   <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Atividades <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                             <li><a href="pre-silabico_1.php">anterior</a></li>
                                             <li><a href="silabicoalfabetico_1.php">próximo</a></li>
                                             
                                        </ul>
                                   </li>
                                   <li class="active"><a href="home.php">Home</a></li>
                                   <li><a href="#">Contato</a></li>
                                   <li><a href="#">Sobre</a></li>

                              </ul>
                         </div> 
                    </div>
               </nav> 
          </header>

          <main >
               <section class="cor-fundo-cabecalho cor-texto-cabecalho text-center" id="titulo-principal" >
                    <h1>com todas as letras</h1>
               </section>
               <section class="container content ">    

                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="modalFimJogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                         <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                   <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">menu</h4>
                                   </div>
                                   <div class="modal-body">
                                        <a href="silabicoalfabetico_1.php"><span>Próximo</span>
                                             <button type="button" class="btn btn-default" aria-label="Left Align">
                                                  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                                             </button>
                                        </a>

                                   </div>
                                   <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                             <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                        </button>
                                        <a href="silabico_vogal_1.php">
                                             <button type="button" id="jogarNovamento" class="btn btn-primary">
                                                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                                             </button>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="container-jogo center-block ">
                         <div class="repositorio pull-left">
                              <p>letras</p>
                              <button id="a" class="arrastar banana" >A</button>
                              <button id="e" class="arrastar pera" >E</button>
                              <button id="o" class="arrastar limao" >O</button>
                              <button id="a" class="arrastar coco" >A</button>
                              <button id="e" class="arrastar uva" >E</button>
                         </div>
                         <!--<audio src="audio/a.mp3" type="audio/mpeg" hidden="true" autoplay="true"></audio>-->
                         <div class="container-imagens  pull-left">

                              <div class="imagem-figura">
                                   <img src="img/frutas/banana.png" class="center-block">
                                   <div class="larga-letra pull-left largar"  ><span class="silaba"><button>B</button></span></div>
                                   <div class="a larga-letra pull-left largar"></div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"><button>NANA</button></span></div>
                              </div>

                              <div class="imagem-figura ">
                                   <img src="img/frutas/cereja.jpg" title="maca" class="center-block">
                                   <div class="larga-letra pull-left largar" id="pera" ><span class="silaba"><button>C</button></span></div>
                                   <div class="e larga-letra pull-left largar"></div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"><button>REJA</button></span></div>
                              </div>
                              <div class="imagem-figura ">
                                   <img src="img/frutas/morango.png" class="center-block">
                                   <div class="larga-letra pull-left largar" id="limao"><span class="silaba"><button>M</button></span></div>
                                   <div class="o larga-letra pull-left largar"></div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"><button>RANGO</button></span></div>
                              </div>
                              <div class="imagem-figura ">
                                   <img src="img/frutas/laranja.jpg" class="center-block">
                                   <div class="larga-letra pull-left largar" id="coco"><span class="silaba"><button>L</button></span></div>
                                   <div class="a larga-letra pull-left largar"></div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"> <button>RANJA</button> </span></div>
                              </div>
                              <div class="imagem-figura ">
                                   <img src="img/frutas/pessego.jpg" class="center-block">
                                   <div class="u larga-letra pull-left largar" id="uva" ><span class="silaba"><button>P</button></span></div>
                                   <div class="e larga-letra pull-left largar"></div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"><button>SSEGO</button></span></div>
                              </div>

                         </div>
                         <div class="container-robo-ajuda pull-right">
                              <img id="robo-ajuda" src="img/16-patient.png">
                         </div>
                    </div>
               </section>
          </main>

<!--          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">instruções</h4>
                         </div>
                         <div class="modal-body">
                              <h1>ouça as instruções</h1>
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              <button type="button" id="ouvirNovamento" class="btn btn-primary">ouvir novamente</button>
                         </div>
                    </div>
               </div>
          </div>-->

          <footer class="rodape ">
               <h2>protótipo para trabalho de conclusão</h2>
          </footer>
          <script src="ui/jquery-ui.js"></script>
  <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>-->
          <!--<script src="js/plugins.js"></script>-->
          <script src="js/main.js"></script>
          <script src="js/pre-silabico.js"></script>
          <script src="js/bootstrap.js"></script>
     </body>
</html>
