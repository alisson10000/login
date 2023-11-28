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
                    $id = $row['idUsuario'];
                    $nome = $row['nomeUsuario'];
                    $login = $row['loginUsuario'];
                    $senha = $row['senhaUsuario'];
                }
                ?>
                <form method="POST" action="servicos/editarUsuario.php" name="frmEditar" id="frmEditar">
                    <input  type="hidden" value="<?php echo $id; ?>" name="matricula" />
                    <input required="" type="text" value="<?php echo $nome; ?>" name="nome" id="nome"/>
                    <input required="" type="text"  value="<?php echo $login; ?>"  name="login" id="login"/>
                    <input required="" type="text"  value="<?php echo $senha; ?>"  name="senha" id="senha"/>
                    <input type="submit" value="editar" />
                </form>
                <?php
            }
        }
        ?>








    </body>
</html>
