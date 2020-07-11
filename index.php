<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zera Dengue</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div id="page-login">
        <div class="content">
            <div class="login-title">
                <h3>Zera Dengue</h3>
            </div>

            <?php
                if(isset($_SESSION['nao_autenticado'])):
            ?>

            <div class="notification is-danger">
                <p>ERRO: Usuário ou senha inválidos.</p>
            </div>

            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>

            <div class="login-form">
                <form action="login.php" method="POST">
                    <div class="field-group">
                        <div class="field">
                            <input name="usuario" name="text" class="" placeholder="Seu usuário" autofocus="">
                        </div>                    
                    </div>
                    <div class="field-group">
                        <div class="field">
                        <input name="senha" class="" type="password" placeholder="Sua senha">
                        </div>                    
                    </div>
                    <div class="field-group">
                        <button type="submit" class="">Entrar
                        </button>
                    </div>    
                    <div class="field-group">
                        <button type="button" class="">
                            <a href="cadastro.php"> Cadastrar </a>
                        </button>
                        <button type="button" class=""> 
                            <a href="cadastro.php"> Esqueceu a senha ? </a>
                        </button>
                    </div>               
                </form>
            </div>
        </div>
        <footer class="">
            <div class="">© 2020 Copyright: Gabriel Carreiro
            </div>
        </footer>
    </div>
</body>
</html>