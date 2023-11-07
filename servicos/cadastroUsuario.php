<?php

include './conexao.php';
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$cadastro = "INSERT INTO `usuarios`(`idUsuario`, `nomeUsuario`, `loginUsuario`, `senhaUsuario`) VALUES ('','$nome','$login','$senha')";

$consultaLogin = "SELECT * FROM `usuarios` WHERE loginUsuario='$login'";

$contagemLogin = 0;

$consulta = mysqli_query($con, $consultaLogin);

//$contagemLogin = mysqli_num_rows($consultaLogin);

echo $contagemLogin;

while ($row = mysqli_fetch_array($consulta)) {
    $contagemLogin++;
}

echo $contagemLogin;

if ($contagemLogin > 0) {
    echo 'Login já utilizado!!!';
} else {

    mysqli_query($con, $cadastro);
    echo 'cadastro realizado com sucesso!!!';
}



