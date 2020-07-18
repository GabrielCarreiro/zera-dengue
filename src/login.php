<?php
session_start();
// Arquivo de conexão com o banco de dados
include('../src/database/conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../src/views/index.php');
	exit();
}
// Código responsável por validar o usuario

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$_SESSION['usuario_id'] = $usuario;

// Realiza um consulta no bando de dados na tabela usuario

$query = "select nome from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

// Se o valor localizado por igual a 1, o usuario poderá logar. Caso for 0 usuario não atenticado

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('Location: ../src/views/create-point.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../src/views/index.php');
	exit();
}