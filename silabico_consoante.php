<!DOCTYPE html>
<html lang="pt-br">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="x-ua-compatible" content="ie=edge">
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>Exercício silábico - consoantes</title>
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
                                             <li><a href="silabicoalfabetico.php">PRÓXIMO</a></li>
                                             <li><a href="silabico_vogal.php">ANTERIOR</a></li>

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
                                        <a href="silabicoalfabetico.php"><span>Próximo</span>
                                             <button type="button" class="btn btn-default" aria-label="Left Align">
                                                  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                                             </button>
                                        </a>
                                   </div>
                                   <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                             <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                        </button>
                                        <a href="silabico_consoante.php">
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
                              <button id="m" class="arrastar maca" >M</button>
                              <button id="p" class="arrastar pera" >P</button>
                              <button id="l" class="arrastar limao" >L</button>
                              <button id="c" class="arrastar coco" >C</button>
                              <button id="v" class="arrastar" >V</button>
                         </div>
                         <!--<audio src="audio/a.mp3" type="audio/mpeg" hidden="true" autoplay="true"></audio>-->
                         <div class="container-imagens  pull-left">

                              <div class="imagem-figura">
                                   <img src="img/frutas/1.jpg" title="maca" class="center-block">
                                   <div class="m larga-letra pull-left largar"  ></div>
                                   <div class="larga-letra pull-left largar"> <span class="silaba"><button>A</button></span>  </div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"><button>ÇA</button></span></div>
                              </div>

                              <div class="imagem-figura ">
                                   <img src="img/frutas/3.jpg" title="maca" class="center-block">
                                   <div class="p larga-letra pull-left largar" id="pera" ></div>
                                   <div class="larga-letra pull-left largar"><span class="silaba"><button>E</button></span></div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"><button>RA</button></span></div>
                              </div>
                              <div class="imagem-figura ">
                                   <img src="img/frutas/5.jpg" class="center-block">
                                   <div class="l larga-letra pull-left largar" id="limao"></div>
                                   <div class="larga-letra pull-left largar"><span class="silaba"><button>I</button></span></div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"><button>MÃO</button></span></div>
                              </div>
                              <div class="imagem-figura ">
                                   <img src="img/frutas/6.jpg" class="center-block">
                                   <div class="c larga-letra pull-left largar" id="coco"></div>
                                   <div class="larga-letra pull-left largar"><span class="silaba"><button>O</button></span></div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"> <button>CO</button> </span></div>
                              </div>
                              <div class="imagem-figura ">
                                   <img src="img/frutas/7.jpg" class="center-block">
                                   <div class="larga-letra pull-left largar" id="coco"><span class="silaba"><button>U</button></span></div>
                                   <div class="v larga-letra pull-left largar"></div>
                                   <div class="larga-letra pull-left largar" id="id">  <span class="silaba"> <button>A</button> </span></div>
                              </div>

                         </div>
                         <div class="container-robo-ajuda pull-right">
                              <img id="robo-ajuda" src="img/16-patient.png">
                         </div>
                    </div>
               </section>
          </main>

         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">instruções</h4>
                         </div>
                         <div class="modal-body">
                              <a href="#" class="ouvirNovamento"><img src="img/slide/54-listen.png" alt="..."></a>
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">
                                   <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                              </button>
                              <button type="button" class="btn btn-default ouvirNovamento">
                                   <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                              </button>


                         </div>
                    </div>
               </div>
          </div>

          <footer class="rodape ">
               <h2>protótipo para trabalho de conclusão</h2>
          </footer>
          <script src="ui/jquery-ui.js"></script>
  <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>-->
          <!--<script src="js/plugins.js"></script>-->
          <script src="js/main.js"></script>
          <script src="js/pre-silabico.js"></script>
          <script src="js/bootstrap.js"></script>
          <script>
               $(document).ready(function () {


                   $('#myModal').modal('show',
                            $('body').append('<audio src="audio/silabico_consoante.mp3" hidden="true" autoplay="true"></audio>')
                            );
                    $('.ouvirNovamento').click(
                            ouvirNovamentoInstrucao
                            );
                    function ouvirNovamentoInstrucao() {
//        alert('teste');
                         $('body').append('<audio src="audio/silabico_consoante.mp3" hidden="true" autoplay="true"></audio>');
                    }

               });
          </script>
     </body>
</html>
