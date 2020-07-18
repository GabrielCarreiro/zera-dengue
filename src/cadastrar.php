<?php
session_start();
// Arquivo de conexão com o banco de dados
include("../src/database/conexao.php");

// Código responsável por trazer todas as informações inserida via POST

$name = mysqli_real_escape_string($conexao, trim($_POST['name']));
$user = mysqli_real_escape_string($conexao, trim($_POST['user']));
$password = mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$cpf = mysqli_real_escape_string($conexao, trim(md5($_POST['cpf'])));
$rg = mysqli_real_escape_string($conexao, trim(md5($_POST['rg'])));
$address = mysqli_real_escape_string($conexao, trim($_POST['address']));
$address2 = mysqli_real_escape_string($conexao, trim($_POST['address2']));
$city = mysqli_real_escape_string($conexao, trim($_POST['city']));
$state = mysqli_real_escape_string($conexao, trim($_POST['state']));
$phone = mysqli_real_escape_string($conexao, trim($_POST['phone']));

// Verifica se o usuario já está cadastrado

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../src/views/create-user.php');
	exit;
}
// Se não estiver castrado, esse comando faz a inserção no banco.

$sql = "INSERT INTO usuario (nome, usuario, senha, data, email, cpf, rg, ende, bairro, cidade, estado, tele) VALUES ('$name', '$user', '$password', NOW(), '$email','$cpf', '$rg', '$address', '$address2','$city','$state', '$phone')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
} 
// Encerra a conexão com o banco de dados

$conexao->close();

//Retorna para página de cadastro informando se o usuario foi cadastrado com sucesso.

header('Location: ../src/views/create-user.php');
exit; 
?>