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
        <ul>
            <li><a href="cadastroInterno.php">Cadastro</a></li>
            <li><a href="editaUsuario.php">edição</a></li>
            <li><a href="">exclusão</a></li>
        </ul>

        <form method="GET" name="frmBuscarUsuario" id="frmBuscarUsuario" action="">
            <input type="hidden" name="buscar" id="buscar"  value="1"/>
            <input required="" type="text" name="matricula" id="matricula" placeholder="Informe matricula de funcionario"/>
            <input type="submit" value="buscar" />            
        </form>

        <?php
        if (isset($_GET['buscar'])) {


            if ($_GET['buscar'] == 1) {


                $matricula = $_GET['matricula'];

                $consulta = "select * from usuarios where idUsuario='$matricula'";

                $buscar = mysqli_query($con, $consulta);

                while ($row = mysqli_fetch_array($buscar)) {

                    $nome = $row['nomeUsuario'];
                    $login = $row['loginUsuario'];
                    $senha = $row['senhaUsuario'];
                }
                ?>
                <form method="POST" action="servicos/editarUsuario.php" name="frmEditar" id="frmEditar">
                    <input type="text" value="<?php echo $nome; ?>" name="nome" id="nome"/>
                    <input type="text"  value="<?php echo $login; ?>"  name="login" id="login"/>
                    <input type="text"  value="<?php echo $senha; ?>"  name="senha" id="senha"/>
                    <input type="button" value="editar" />
                </form>
                <?php
            }
        }
        ?>








    </body>
</html>
