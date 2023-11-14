<?php
include './servicos/verifica.php';
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/funcoes.js"></script>
    </head>
    <body>
        <p><a href="servicos/sair.php">sair</a>  </p>
        <p>seja bem vindo
            <?php
            $consulta = "SELECT * FROM `usuarios` WHERE loginUsuario='$login' AND senhaUsuario='$senha';";

            $consulta = mysqli_query($con, $consulta);

            while ($row = mysqli_fetch_array($consulta)) {
                echo $row['nomeUsuario'];
            }
            ?>


        </p>

        <ul>
            <li><a href="cadastroInterno.php">Cadastro</a></li>
            <li><a href="editaUsuario.php">edição</a></li>
            <li><a href="">exclusão</a></li>
        </ul>

        <form name="frmCadastro" method="POST" id="frmCadastro" action="servicos/cadastroUsuario.php">
            <input type="text" name="nome" id="nome" placeholder="digite seu nome" />
            <input type="text" name="login" id="login" placeholder="digite seu login" />
            <input type="password" name="senha" id="senha" placeholder="digite sua senha"  />
            <input type="password" name="confirmaSenha" id="confirmaSenha" placeholder="repita a sua senha" />
            <input type="button" onclick="validaCadastro()" value="cadastrar" />

        </form>



    </body>
</html>
