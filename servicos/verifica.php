<?php
include 'conexao.php';
session_start();
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];
$consulta = "select * from usuarios where loginUsuario='$login' and senhaUsuario='$senha'";
$resultado = mysqli_query($con, $consulta);
echo $contagem = mysqli_num_rows($resultado);
 if($contagem > 0 ){
 }else{
     header("Location: ./servicos/naoautenticado.php");
 }