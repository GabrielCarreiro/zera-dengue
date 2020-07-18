<?php
session_start();
// Arquivo de conexão com o banco de dados

include("../src/database/conexao.php");

// Código responsável por trazer todas as informações inserida via POST

$ende = mysqli_real_escape_string($conexao, trim($_POST['ende']));
$bairro = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));


// Atribui o usuario na variavél $user

$user = $_SESSION['usuario_id']; 

//Código para mover a imagem para servidor

$uploaddir = 'upload/'; 

if (isset($_FILES['userfile']))

	if (move_uploaded_file ( $_FILES['userfile']['tmp_name'], $uploaddir . $_FILES['userfile']['name'])) {
		$uploadfile = $uploaddir . $_FILES['userfile']['name'];

	}
	// Código para inserir a denúncia no banco, e o nome da imagem, e também o usuario que realizou a denúncia

	$sql = "INSERT INTO denuncia (ende, bairro, cidade, estado, descricao, arquivo, data_den, usuario) VALUES ('$ende','$bairro', '$cidade', '$estado', '$descricao', '$uploadfile', NOW(), '$user')";

	if($conexao->query($sql) === TRUE) {
		$_SESSION['denuncia_Realizada'] = true;
	}

	// Encerra a conexão com o banco de dados

	$conexao->close();

	// Chama o arquivo Finalizar.php.

	header('Location: ../src/views/done.php');
	exit; 
	?>