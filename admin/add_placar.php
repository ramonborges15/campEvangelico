<?php
header("Access-Control-Allow-Origin: *");
$conexao = mysqli_connect("mysql.hostinger.com.br", "u460013032_rbs17", " ", " ");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adicionando Placares</title>
  </head>
  <body>
    <form action="insere_placar.php" method="post">
      <h1>Escolha o Jogo</h1> <br><br><br>
      <select name="club_selected">
        <?php
        $dados = mysqli_query($conexao, "SELECT * FROM resultados WHERE jogo_realizado=0");
        while($jogos = mysqli_fetch_array($dados)):
          $numJogo = $jogos['cod_jogo'];
          ?>

        <option value="<?=$numJogo ?>">
          <?php
            $cod1 = $jogos['cod_time_home'];
            $cod2 = $jogos['cod_time_away'];
            //$numJogo = $jogos['cod_jogo'];

            $n1 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE codificacao.cod_time=$cod1");
            $n2 = mysqli_query($conexao, "SELECT nome FROM codificacao WHERE codificacao.cod_time=$cod2");

            $nome1 = mysqli_fetch_array($n1);
            $nome2 = mysqli_fetch_array($n2);
          ?>
          <?=$numJogo ?> - <?= $nome1['nome'] ?> x <?= $nome2['nome'] ?>
        </option>

      <?php endwhile; ?>
      </select>
      <br><br><br>
      Casa: <input type="number" name="valor_home" value="" placeholder="Número de gols" required="">
      Visitante: <input type="number" name="valor_away" value="" placeholder="Número de gols" required="">
      <br><br>
      <input type="submit" value="Inserir Placar">

    </form>
    <br><br><br>
    <hr>
    <br>
    <form action="atualizar_tabela.php" method="post">
      <input type="submit" name="atualizar_tabela" value="Atualizar Classificação">
    </form>
    <br>
    <a href="jogos.php">Voltar</a>
  </body>
</html>
