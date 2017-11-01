<?php

header("Access-Control-Allow-Origin: *");
$conexao = mysqli_connect("mysql.hostinger.com.br", "u460013032_rbs17", " ", " ");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$dadosa = mysqli_query($conexao, "SELECT classificacao.pontos, classificacao.vitorias, classificacao.empates,
  classificacao.derrotas, classificacao.jogos, classificacao.saldo, codificacao.nome FROM
  classificacao INNER JOIN codificacao ON classificacao.cod_time = codificacao.cod_time WHERE
  classificacao.grupo = 'a' ORDER BY pontos DESC, saldo DESC, vitorias DESC");


?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
      <title>XXI - Campeonato Evangélico de Futsal 2017</title>

      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="css/simple-sidebar.css" rel="stylesheet">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-98327697-1', 'auto');
        ga('send', 'pageview');

      </script>

  </head>

  <body>

      <div id="wrapper">

          <!-- Sidebar -->
          <div id="sidebar-wrapper">
              <ul class="sidebar-nav">
                  <li class="sidebar-brand">
                      <a href="index.html">
                          Início
                      </a>
                  </li>
                  <li>
                      <a href="classificacao.php">Classificação</a>
                  </li>
                  <li>
                      <a href="resultados.php">Jogos & Resultados</a>
                  </li>
                  <div class="col-lg-8 col-lg-offset-2">
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <p>&copy; 2017 desenvolvido por R. Borges<p>
                    <p>ramontricolor12@gmail.com<p>
                  </div>
              </ul>
          </div>
          <!-- /#sidebar-wrapper -->

          <!-- Page Content -->

            <div id="page-content-wrapper">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">Menu</a>
                    <div class="row">
                      <br />
                      <div class="col-lg-3">
                        <img src="img/logo.jpg" height="100%" width="50%">
                      </div>
                      <div class="col-lg-9">
                        <h1><strong>XXI - Campeonato Evangélico de Futsal 2017</strong></h1>
                        <h3>São Mateus - ES</h3>
                      </div>
                    </div>

                    <hr/>
                    <h3>Classificação</h3>
                    <p>
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-primary">

                          <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Chave A
                              </a>
                            </h4>
                          </div>

                          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                              <table class="table">
                                <tr>
                                  <td></td>
                                  <td><Strong>Equipes</Strong></td>
                                  <td><Strong>Pts</Strong></td>
                                  <td><Strong>J</Strong></td>
                                  <td><Strong>V</Strong></td>
                                  <td><Strong>E</Strong></td>
                                  <td><Strong>D</Strong></td>
                                  <td><Strong>SG</Strong></td>
                                </tr>

                                <?php
                                  $cont = 0;
                                  while($clubs = mysqli_fetch_array($dadosa)):
                                  $cont++;
                                ?>

                                <tr>
                                  <td><?= $cont ?></td><td><?= $clubs['nome'] ?></td><td><?= $clubs['pontos'] ?></td><td><?= $clubs['jogos'] ?></td>
                                  <td><?= $clubs['vitorias'] ?></td><td><?= $clubs['empates'] ?></td><td><?= $clubs['derrotas'] ?></td>
                                  <td><?= $clubs['saldo'] ?></td>
                                </tr>
                                <?php endwhile; ?>
                              </table>
                            </div>
                          </div>

                          <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Chave B
                              </a>
                            </h4>
                          </div>

                          <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                              <table class="table">
                                <tr>
                                  <td></td>
                                  <td><Strong>Equipes</Strong></td>
                                  <td><Strong>Pts</Strong></td>
                                  <td><Strong>J</Strong></td>
                                  <td><Strong>V</Strong></td>
                                  <td><Strong>E</Strong></td>
                                  <td><Strong>D</Strong></td>
                                  <td><Strong>SG</Strong></td>
                                </tr>

                                <?php
                                  $dadosb = mysqli_query($conexao, "SELECT classificacao.pontos, classificacao.vitorias, classificacao.empates,
                                      classificacao.derrotas, classificacao.jogos, classificacao.saldo, codificacao.nome FROM
                                      classificacao INNER JOIN codificacao ON classificacao.cod_time = codificacao.cod_time WHERE
                                      classificacao.grupo = 'b' ORDER BY pontos DESC, saldo DESC, vitorias DESC");

                                $cont = 0;
                                while($clubs = mysqli_fetch_array($dadosb)):
                                $cont = $cont+1;
                                ?>

                                <tr>
                                  <td><?= $cont ?></td><td><?= $clubs['nome'] ?></td><td><?= $clubs['pontos'] ?></td><td><?= $clubs['jogos'] ?></td>
                                  <td><?= $clubs['vitorias'] ?></td><td><?= $clubs['empates'] ?></td><td><?= $clubs['derrotas'] ?></td>
                                  <td><?= $clubs['saldo'] ?></td>
                                </tr>
                                <?php endwhile; ?>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </p>


                  </div>
                </div>

                <div class="panel panel-warning">
                  <div class="panel-heading">Legenda</div>
                  <div class="panel-body">
                    <table class="table">
                      <tr class="success">
                        <td>Classificados 2 primeiros</td>
                      </tr>
                    </table>
                  </div>
                </div>

              </div>
            </div>

          <!-- /#page-content-wrapper -->
          <hr/>

      </div>

      <!-- /#wrapper -->

      <!-- jQuery -->
      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>

      <!-- Menu Toggle Script -->
      <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });
      </script>

  </body>

  </html>
