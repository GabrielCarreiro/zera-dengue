<?php
session_start();
include('../../src/verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denunciar</title>
    <link rel="stylesheet" href="../../public/styles/create-point.css">
    <link rel="stylesheet" href="../../public/styles/main.css">
</head>
<body>
    <div id="create-point">
        <div class="conteiner">
            <header>
            <a href="index.php">
                <span></span> Voltar         
            </a>
            </header>
            <form action="../../src/gravardenuncia.php" method="POST" enctype="multipart/form-data" >
                <div class="field-group">
                    <div class="field">
                        <h3> <span> Endereço da denúncia </span> </h3>
                        <input name="ende" type="text" required class="input is-large" placeholder="Endereço da denúncia Ex: Rua Maria Souza - 158 " autofocus>
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input type="text" name ="bairro" required class="" placeholder="Bairro">
                    </div>
                    <div class="field">
                        <input type="text" name = "cidade" required class="" placeholder="Cidade">
                    </div>
                    <div class="field"> 
                        <input type="text" name = "estado" required class="" placeholder="Estado">
                    </div>
                </div>
                <div class="field-group">
                    <h3> <span> Descrição </span> </h3>
                    <textarea name="descricao" required class="" id="descricao" rows="3" ></textarea>
                </div>
                <div class="field-group">
                    <h3><span> Imagem da denúncia </span> </h3> 
                    <input type="file" required class="" name="userfile">
                </div>
                <button type="submit" required class=""> Denúncia </button>
            </form>
        </div>
    </div>
</body>
</html>