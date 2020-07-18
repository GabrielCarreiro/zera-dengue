<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="../../public/styles/create-user.css">
    <link rel="stylesheet" href="../../public/styles/main.css">
</head>
<body>
    <div id="create-user">
        <div class="conteiner">
           <header>
                <a href="index.php">
                    <span></span> Voltar         
                </a>
            </header>
            <?php
                if(isset($_SESSION['status_cadastro'])):
            ?>
            <div class="success">
				<p align="center"> Cadastro efetuado!</p>
				<p>Faça login informando o seu usuário e senha <a href="index.php">aqui</a></p>
			</div>
            <?php
                endif;
                unset($_SESSION['status_cadastro'])
            ?>
            <?php
                if(isset($_SESSION['usuario_existe'])):
            ?>
            <div class="err">
                <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
            </div>
            <?php
                endif;
                unset($_SESSION['usuario_existe'])
            ?>
            <form action="../../src/cadastrar.php" method="POST">
                <div class="field-group">
                    <div class="field">
                        <input name="name" type="text" minlength="8" required placeholder="Nome" autofocus>
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input name="user" type="text" minlength="6" required placeholder="Usuário">
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input name="password" id="password" minlength="8" required  type="password" placeholder="Senha" onkeyup="validandoSenha()">
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input name="email" type="email"  required  placeholder="Email"> 
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input name="cpf" type="text" minlength="11"  maxlength="11" required  placeholder="CPF">
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input name="rg" type="text" minlength="9" minlength="9" required  placeholder="RG">
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input name="address" type="text" minlength="10" placeholder="Endereço">
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input name="address2" type="text" placeholder="Bairro">
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <select name="uf" >
                            <option value="">
                                Selecione o estado
                            </option>
                        </select>
                        <input type="hidden" name="state">
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <select name="city">
                            <option value="">Selecione a cidade</option>
                        </select>
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input name="phone" minlength="9" type="text" class="" placeholder="Telefone">
                    </div>
                </div>
                <button type="submit" class="">Cadastrar</button>
            </form>
        </div>  
    </div>  
    <script src="../../public/scripts/create-user.js">
    </script> 
</body>
</html>

