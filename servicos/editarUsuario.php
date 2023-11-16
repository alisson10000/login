<?php

include 'conexao.php';
echo $matricula = filter_input(INPUT_POST, 'matricula', FILTER_DEFAULT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$login = filter_input(INPUT_POST, 'login', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$consulta = "UPDATE usuarios SET nomeUsuario='$nome',loginUsuario='$login',senhaUsuario='$senha' WHERE idUsuario='$matricula'";
mysqli_query($con, $consulta);

