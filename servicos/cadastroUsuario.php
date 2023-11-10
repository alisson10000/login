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

 $contagemLogin;

while ($row = mysqli_fetch_array($consulta)) {
    $contagemLogin++;
}

$contagemLogin;

if ($contagemLogin > 0) {
    echo 'Login já utilizado!!!';
} else {

    mysqli_query($con, $cadastro);
    echo "cadastro realizado com sucesso click <a href='../index.php'>aqui</a> para logar!!!";
}



