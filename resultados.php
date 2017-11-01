<?php
header("Access-Control-Allow-Origin: *");
$conexao = mysqli_connect("mysql.hostinger.com.br", "u460013032_rbs17", " ", " ");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
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
          <h3>Jogos & Resultados</h3>

          <p>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-primary">

                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Realizados
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

                  <div class="panel-body">
                      <ol>
                        <?php
                          $dados = mysqli_query($conexao, "SELECT * FROM resultados WHERE jogo_realizado=1 or jogo_realizado=2");
                          while($jogos = mysqli_fetch_array($dados)):

                          $cod1 = $jogos['cod_time_home'];
                          $cod2 = $jogos['cod_time_away'];
                          $n1 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod1 = codificacao.cod_time");
                          $n2 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod2 = codificacao.cod_time");

                          $nome1 = mysqli_fetch_array($n1);
                          $nome2 = mysqli_fetch_array($n2);
                        ?>

                        <li><?=$nome1['nome'] ?> <strong><?= $jogos['placar_home'] ?>x<?= $jogos['placar_time_away'] ?>
                        </strong> <?= $nome2['nome'] ?></li>

                        <?php  endwhile; ?>
                      </ol>
                  </div>
                </div>

                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      Próximos Jogos
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <strong>Rodada 1 - 01 de Maio</strong>
                    <ul>
                      <?php
                        $dados = mysqli_query($conexao, "SELECT * FROM resultados WHERE jogo_realizado=0 AND rodada = 1");
                        while($jogos = mysqli_fetch_array($dados)):

                        $cod1 = $jogos['cod_time_home'];
                        $cod2 = $jogos['cod_time_away'];
                        $n1 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod1 = codificacao.cod_time");
                        $n2 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod2 = codificacao.cod_time");

                        $nome1 = mysqli_fetch_array($n1);
                        $nome2 = mysqli_fetch_array($n2);
                      ?>

                      <li><?= $nome1['nome'] ?> <strong>x</strong> <?= $nome2['nome'] ?> <strong>(<?=$jogos['horario_jogo']?> h)</strong></li>
                      <?php endwhile; ?>
                    </ul>

                    <strong>Rodada 2 - 06 de Maio</strong>
                    <ul>
                      <?php
                        $dados = mysqli_query($conexao, "SELECT * FROM resultados WHERE jogo_realizado=0 AND rodada = 2");
                        while($jogos = mysqli_fetch_array($dados)):

                        $cod1 = $jogos['cod_time_home'];
                        $cod2 = $jogos['cod_time_away'];
                        $n1 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod1 = codificacao.cod_time");
                        $n2 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod2 = codificacao.cod_time");

                        $nome1 = mysqli_fetch_array($n1);
                        $nome2 = mysqli_fetch_array($n2);
                      ?>

                      <li><?= $nome1['nome'] ?> <strong>x</strong> <?= $nome2['nome'] ?> <strong>(<?=$jogos['horario_jogo']?> h)</strong></li>
                      <?php endwhile; ?>
                    </ul>

                    <strong>Rodada 3 - 13 de Maio</strong>
                    <ul>
                      <?php
                        $dados = mysqli_query($conexao, "SELECT * FROM resultados WHERE jogo_realizado=0 AND rodada = 3");
                        while($jogos = mysqli_fetch_array($dados)):

                        $cod1 = $jogos['cod_time_home'];
                        $cod2 = $jogos['cod_time_away'];
                        $n1 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod1 = codificacao.cod_time");
                        $n2 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod2 = codificacao.cod_time");

                        $nome1 = mysqli_fetch_array($n1);
                        $nome2 = mysqli_fetch_array($n2);
                      ?>

                      <li><?= $nome1['nome'] ?> <strong>x</strong> <?= $nome2['nome'] ?> <strong>(<?=$jogos['horario_jogo']?> h)</strong></li>
                      <?php endwhile; ?>
                    </ul>

                    <strong>Rodada 4 - 20 de Maio</strong>
                    <ul>
                      <?php
                        $dados = mysqli_query($conexao, "SELECT * FROM resultados WHERE jogo_realizado=0 AND rodada = 4");
                        while($jogos = mysqli_fetch_array($dados)):

                        $cod1 = $jogos['cod_time_home'];
                        $cod2 = $jogos['cod_time_away'];
                        $n1 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod1 = codificacao.cod_time");
                        $n2 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod2 = codificacao.cod_time");

                        $nome1 = mysqli_fetch_array($n1);
                        $nome2 = mysqli_fetch_array($n2);
                      ?>

                      <li><?= $nome1['nome'] ?> <strong>x</strong> <?= $nome2['nome'] ?> <strong>(<?=$jogos['horario_jogo']?> h)</strong></li>
                      <?php endwhile; ?>
                    </ul>

                    <strong>Rodada 5 - 27 de Maio</strong>
                    <ul>
                      <?php
                        $dados = mysqli_query($conexao, "SELECT * FROM resultados WHERE jogo_realizado=0 AND rodada = 5");
                        while($jogos = mysqli_fetch_array($dados)):

                        $cod1 = $jogos['cod_time_home'];
                        $cod2 = $jogos['cod_time_away'];
                        $n1 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod1 = codificacao.cod_time");
                        $n2 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE $cod2 = codificacao.cod_time");

                        $nome1 = mysqli_fetch_array($n1);
                        $nome2 = mysqli_fetch_array($n2);
                      ?>

                      <li><?= $nome1['nome'] ?> <strong>x</strong> <?= $nome2['nome'] ?> <strong>(<?=$jogos['horario_jogo']?> h)</strong></li>
                      <?php endwhile; ?>
                    </ul>

                  </div>
                </div>

              </div>
            </div>
          </p>


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
