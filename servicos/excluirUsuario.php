<?php
require_once  './conexao.php';
echo $matricula = filter_input(INPUT_POST, 'idUsuario', FILTER_DEFAULT);
$consulta = "DELETE FROM usuarios WHERE idUsuario='$matricula'";
$consulta =  mysqli_query($con, $consulta);
 $consulta = "SELECT `idUsuario`, `nomeUsuario`, `loginUsuario`, `senhaUsuario` FROM `usuarios` WHERE idUsuario='$matricula'";
 $resultado = mysqli_query($con, $consulta);
 $contagem = mysqli_num_rows($resultado);
if($contagem == 0){
    echo '<br>Registro excluido com sucesso';
}else{
    echo '<br>Falha na exclusão do registro';
}






