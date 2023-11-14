<?php
include 'conexao.php';
session_start();
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];

if(empty($login) || empty($senha)){
   header("Location: ./servicos/naoautenticado.php");
}


$consulta = "select * from usuarios where loginUsuario='$login' and senhaUsuario='$senha'";
$resultado = mysqli_query($con, $consulta);
$contagem = mysqli_num_rows($resultado);
 if($contagem > 0 ){
 }else{
     header("Location: ./servicos/naoautenticado.php");
 }
 //teste maquina do professor.
 
