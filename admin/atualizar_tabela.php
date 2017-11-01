<?php
header("Access-Control-Allow-Origin: *");
$conexao = mysqli_connect("mysql.hostinger.com.br", "u460013032_rbs17", " ", " ");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$dados = mysqli_query($conexao, "SELECT * FROM resultados WHERE jogo_realizado=1");

while ($jogos = mysqli_fetch_array($dados)):
?>

<?php
  $codigo_jogo = $jogos['cod_jogo'];
  $cod_home = $jogos['cod_time_home'];
  $cod_away = $jogos['cod_time_away'];
  $home_placar = $jogos['placar_home'];
  $away_placar = $jogos['placar_time_away'];
  $saldo_placar = $home_placar - $away_placar;

  $hVar = mysqli_query($conexao, "SELECT * FROM classificacao WHERE cod_time = $cod_home");
  $aVar = mysqli_query($conexao, "SELECT * FROM classificacao WHERE cod_time = $cod_away");
  $hclub_tabela = mysqli_fetch_array($hVar);
  $aclub_tabela = mysqli_fetch_array($aVar);

  if ($home_placar > $away_placar) {
    //time vencedor
    //valores da tabela de classificação
    $p = $hclub_tabela['pontos'];
    $v = $hclub_tabela['vitorias'];
    $j = $hclub_tabela['jogos'];
    $s = $hclub_tabela['saldo'];
    //atualizando valores
    $p += 3;
    $v++;
    $j++;
    $s += $saldo_placar;

    mysqli_query($conexao, "UPDATE classificacao SET pontos = $p, vitorias=$v,
      jogos=$j, saldo=$s WHERE cod_time = $cod_home");

    //time perdedor
    //valores da tabela de classificação
    $d = $aclub_tabela['derrotas'];
    $j = $aclub_tabela['jogos'];
    $s = $aclub_tabela['saldo'];
    //atualizando valores
    $d++;
    $j++;
    $s -= $saldo_placar;

    mysqli_query($conexao, "UPDATE classificacao SET derrotas = $d, jogos = $j,
      saldo = $s WHERE cod_time = $cod_away");
    //setando informação de resultado atualizado
    mysqli_query($conexao, "UPDATE resultados SET jogo_realizado = 2 WHERE cod_jogo = $codigo_jogo");

  }elseif ($home_placar < $away_placar) {
    //time vencedor fora de casa
    //valores da tabela de classificação
    $p = $aclub_tabela['pontos'];
    $v = $aclub_tabela['vitorias'];
    $j = $aclub_tabela['jogos'];
    $s = $aclub_tabela['saldo'];
    //atualizando valores
    $p += 3;
    $v++;
    $j++;
    $s -= $saldo_placar;

    mysqli_query($conexao, "UPDATE classificacao SET pontos = $p, vitorias=$v,
      jogos=$j, saldo=$s WHERE cod_time = $cod_away");

    //time perdedor dentro de casa
    //valores da tabela de classificação
    $d = $hclub_tabela['derrotas'];
    $j = $hclub_tabela['jogos'];
    $s = $hclub_tabela['saldo'];
    //atualizando valores
    $d++;
    $j++;
    $s += $saldo_placar;

    mysqli_query($conexao, "UPDATE classificacao SET derrotas = $d, jogos = $j,
      saldo = $s WHERE cod_time = $cod_home");
    //setando informação de resultado atualizado
    mysqli_query($conexao, "UPDATE resultados SET jogo_realizado = 2 WHERE cod_jogo = $codigo_jogo");

  }else {
    //Empate
    //valores da tabela de classificação
    $p = $hclub_tabela['pontos'];
    $e = $hclub_tabela['empates'];
    $j = $hclub_tabela['jogos'];
    //atualizando valores
    $p += 1;
    $e++;
    $j++;

    mysqli_query($conexao, "UPDATE classificacao SET pontos = $p, empates=$e,
      jogos=$j WHERE cod_time = $cod_home");

    //valores da tabela de classificação
    $p = $aclub_tabela['pontos'];
    $e = $aclub_tabela['empates'];
    $j = $aclub_tabela['jogos'];
    //atualizando valores
    $p += 1;
    $e++;
    $j++;

    mysqli_query($conexao, "UPDATE classificacao SET pontos = $p, empates=$e,
      jogos=$j WHERE cod_time = $cod_away");
    //setando informação de resultado atualizado
    mysqli_query($conexao, "UPDATE resultados SET jogo_realizado = 2 WHERE cod_jogo = $codigo_jogo");

  }
?>

<?php endwhile; ?>
Atualizado!
<br>
<a href="add_placar.php">Voltar</a>
