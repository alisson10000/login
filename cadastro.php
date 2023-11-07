<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>página de cadastro</title>
        <script src="js/funcoes.js"></script>
    </head>
    <body>
        <form name="frmCadastro" method="POST" id="frmCadastro" action="servicos/cadastroUsuario.php">
            <input type="text" name="nome" id="nome" placeholder="digite seu nome" />
            <input type="text" name="login" id="login" placeholder="digite seu login" />
            <input type="password" name="senha" id="senha" placeholder="digite sua senha"  />
            <input type="password" name="confirmaSenha" id="confirmaSenha" placeholder="repita a sua senha" />
            <input type="button" onclick="validaCadastro()" value="cadastrar" />

        </form>
    </body>
</html>
