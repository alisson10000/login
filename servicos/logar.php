<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include './conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];


$consulta = "select * from usuarios where loginUsuario='$login' and senhaUsuario='$senha'";

$resultado = mysqli_query($con, $consulta);
 $contagem = mysqli_num_rows($resultado);
 
 
 
 if($contagem > 0 ){
     header("Location: ../home.php");
     session_start();
     $_SESSION['login'] = $login;
     $_SESSION['senha'] = $senha;
     
     
     
     
 }else{
     echo 'Login ou senha inválido!';
     echo 'Click <a href="../cadastro.php">aqui</a> para criar a sua conta';
     echo '<br >Ou click <a href="../index.php">aqui</a> para refazer o seu login';
 }











