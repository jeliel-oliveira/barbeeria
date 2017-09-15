<?php
$conexao = mysqli_connect('localhost','root','','dbbarberia');

mysqli_set_charset($conexao,'utf-8');

if($conexao->connect_error){
	die("Falha ao realizar a conexão: ".$conexao->connect_error);
}

?: