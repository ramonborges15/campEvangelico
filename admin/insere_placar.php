<?php
header("Access-Control-Allow-Origin: *");
$conexao = mysqli_connect("mysql.hostinger.com.br", "u460013032_rbs17", "", "");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$r = $_POST['club_selected'];
$codigo_jogo = $r;
$home = $_POST['valor_home'];
$away = $_POST['valor_away'];

echo "$codigo_jogo";
echo " - ";
echo "$home";
echo " X ";
echo "$away";

mysqli_query($conexao, "UPDATE resultados SET placar_home = $home, placar_time_away = $away, jogo_realizado = 1 WHERE cod_jogo = $codigo_jogo");

?>
<br>
Realizado com Sucesso! <br>
<a href="add_placar.php">Voltar</a>
