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
            <li><a href="excluiUsuario.php">exclusão</a></li>
              <li><a href="listaUsuario.php">listagem</a></li>
        </ul>
        <form method="POST" action="servicos/excluirUsuario.php">
            <input required="" placeholder="informe a matricula para exclusão" type="text" name="idUsuario" id="idUsuario" />
            <input type="submit" value="excluir" name="name">
        </form>
    </body>
</html>
