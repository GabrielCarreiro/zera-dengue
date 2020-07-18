<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zera Dengue</title>
    <link rel="stylesheet" href="../../public/styles/login.css">
    <link rel="stylesheet" href="../../public/styles/main.css">
</head>
<body>
    <div id="page-login">
        <div class="content">
            <?php
                if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="err">
                <p>ERRO: Usuário ou senha inválida.</p>
            </div>

            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>
            <div class="login-form">
                <div class="login-title">
                    <h3> <span> Zera </span>  Dengue</h3>
                </div>
                <form action="../../src/login.php" method="POST">
                    <div class="field-group">
                        <div class="field">
                            <input name="usuario" name="text" class="" placeholder="Usuário" autofocus="">
                        </div>                    
                    </div>
                    <div class="field-group">
                        <div class="field">
                        <input name="senha" class="" type="password" placeholder="Senha">
                        </div>                    
                    </div>
                    <div class="field-group">
                        <button type="submit" class="">Entrar
                        </button>
                    </div>    
                    <div class="field-group">
                        <button type="button" class="">
                            <a href="create-user.php"> Cadastrar </a>
                        </button>
                        <button type="button" class=""> 
                            <a href="/../cadastro.php"> Esqueceu a senha ? </a>
                        </button>
                    </div>               
                </form>             
            </div>
        </div>       
    </div>
</body>
</html>