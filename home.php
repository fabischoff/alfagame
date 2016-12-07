<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Título da Página</title>
        <meta name="description" content="" />
        <meta name="robots" content="index, follow" />

        <link rel="shortcut icon" href="favicon.png"/>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap-theme.css"/>
        <link rel="stylesheet" href="css/auxiliares.css"/>
        <link rel="stylesheet" href="css/template.css"/>
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
                        <a class="navbar-brand" href="home.php">alfa game</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Atividades <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Nível 1</a></li>
                                    <li><a href="#">Nível 2</a></li>
                                    <li><a href="#">Nível 3</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
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
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">ouça as instruções</h4>
                            </div>
                            <div class="modal-body">
                                <a href="#" class="ouvirNovamento"><img src="img/slide/54-listen.png" alt="..."></a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                <button type="button" class=" ouvirNovamentobtn btn btn-primary">ouvir novamente</button>
                                
                            </div>
                        </div>
                    </div>
                </div>


                <div id="carrosel" class="carousel slide pull-left" data-ride="carousel">
                    <!-- Indicators -->
                    <!-- Wrapper for slides -->
                    <figure class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/slide/103-shape-3.png" alt="...">
                            <div class="carousel-caption">
                                <h3>jogos das letras</h3>
                                <p>aprenda jogando e se divertindo!!</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/105-shape-5.png" alt="...">
                            <div class="carousel-caption">     
                                <h3>bem-vindo</h3>
                                <p>aprenda jogando e se divertindo!!</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/51-book.png" alt="...">
                            <div class="carousel-caption">
                                <h3>aprendendo primeiras letras</h3>
                                <p>vamos lá amiguinhos</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/54-listen.png" alt="...">
                            <div class="carousel-caption">
                                <h3>ouça as letrinhas</h3>
                                <p>escute o som e o nome das letras</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide/50-notepad.png" alt="...">
                            <div class="carousel-caption">
                                <h3>aprendendo a escrever</h3>
                                <p>escrevendo usando vogais e consoantes</p>
                            </div>

                        </div>

                    </figure>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carrosel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carrosel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="menu-exercicios pull-right  ">

                    <section>
                        <h1 class="cor-fundo-cabecalho cor-texto-cabecalho"> exercícios </h1>

                        <nav >
                            <ul>
                                <li>
                                    <a id="presilabico" href="pre-silabico.php"></a> 
                                </li>
                                <li>
                                    <a id="silabico" href="silabico.php"></a>
                                </li>
                                <li>
                                    <a id="silabico-alfabetico" href="#"></a>
                                </li>
                                <li>
                                    <a id="alfabetico" href="#"></a>
                                </li>
                            </ul>     
                        </nav>
                    </section>
                </div>
            </section>
        </main>

        <footer class="rodape ">
            <h2>protótipo para trabalho de conclusão</h2>


        </footer>
        <script src="ui/jquery-ui.js"></script>
<!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>-->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>





        <script src="js/bootstrap.js"></script>
    </body>
</html>
