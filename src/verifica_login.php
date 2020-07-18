<?php 

// Código para verificar o login 

if(!$_SESSION['nome']) { session_start();  
	header('Location: ../src/views/index.php');
	session_start();
	exit();
	
}