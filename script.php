<?php
include 'connect.php'

$nome = $_POST['nome'];
$senha = $_POST['email'];
$sobrenome = $_POST['sobrenome'];
$servico = $_POST['servico'];
$pagamento = $_POST['pagamento'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$hora = $_POST['hora'];
$minuto = $_POST['minuto'];

$sql = "INSERT INTO tbagenda VALUES";
$sql.= "('$nome','$email','$sobrenome','$servico','$pagamento','$dia','$mes','$ano','$hora','$minuto')";

if($conexao->query($sql)){
	echo "Agendado com sucesso!";
}else{
	echo "Erro: ".$sql;
}
$conexao->close();
?>