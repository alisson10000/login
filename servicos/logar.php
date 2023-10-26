<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include './conexao.php';

echo $login = $_POST['login'];
echo $senha = $_POST['senha'];


$consulta = "select * from usuarios where loginUsuario='$login' and senhaUsuario='$senha'";

$resultado = mysqli_query($con, $consulta);
 echo $contagem = mysqli_num_rows($resultado);
 
 
 
 if($contagem > 0 ){
     header("Location: ../home.php");
     session_start();
     $_SESSION['login'] = $login;
     $_SESSION['senha'] = $senha;
     
     
     
     
 }else{
     echo 'Login ou senha inválido!';
 }











